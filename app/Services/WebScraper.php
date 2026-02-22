<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\FacadesLog;
use Symfony\Component\DomCrawler\Crawler;

class WebScraper
{
    protected Client    $client;

    protected CookieJar $cookieJar;

    protected ?string   $csrfToken = null;

    public function __construct()
    {
        $this->cookieJar = new CookieJar();

        $this->client = new Client([
            'timeout'         => 30,
            'allow_redirects' => true,
            'verify'          => false,
        ]);
    }

    protected function bootstrap(): void
    {
        if ($this->csrfToken) {
            return;
        } // already done

        $res = $this->client->get('https://www.ipopremium.in/', [
            'cookies' => $this->cookieJar,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'Accept'     => 'text/html,application/xhtml+xml,*/*',
            ],
        ]);

        $html = $res->getBody()->getContents();
        $crawler = new Crawler($html);

        try {
            $this->csrfToken = $crawler->filter('meta[name="csrf-token"]')->attr('content');
        } catch (\Exception $e) {
            try {
                $this->csrfToken = $crawler->filter('input[name="_token"]')->attr('value');
            } catch (\Exception $e2) {
                Log::warning('CSRF token not found');
            }
        }

        Log::info('CSRF bootstrapped: ' . $this->csrfToken);
    }

    protected function postIpo(int $start = 0, int $length = 100): array
    {
        $this->bootstrap();

        $response = $this->client->post('https://www.ipopremium.in/ipo', [
            'cookies' => $this->cookieJar,
            'headers' => [
                'User-Agent'       => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'Accept'           => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest',
                'X-CSRF-TOKEN'     => $this->csrfToken,
                'Referer'          => 'https://www.ipopremium.in/',
                'Content-Type'     => 'application/json',
            ],
            'json' => [
                'start'  => $start,
                'length' => $length,
            ],
        ]);

        $body = $response->getBody()->getContents();
        $decoded = json_decode($body, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('JSON decode error: ' . json_last_error_msg());
            return ['data' => [], 'recordsTotal' => 0];
        }

        return $decoded;
    }

    public function scrapeIpoList(int $limit = 100): array
    {
        try {
            $result = $this->postIpo(0, $limit);
            $data = $result['data'] ?? [];

            if (empty($data)) {
                Log::warning('Empty data returned from IPO API');
                return [];
            }

            return $this->parseIpoData($data);
        } catch (\Exception $e) {
            Log::error('scrapeIpoList failed: ' . $e->getMessage());
            return [];
        }
    }

    public function scrapeAllIpos(): array
    {
        try {
            // First call to get total count
            $first = $this->postIpo(0, 100);
            $total = $first['recordsTotal'] ?? 0;
            $allData = $first['data'] ?? [];

            Log::info("Total IPOs available: $total");

            // Fetch remaining pages
            $pageSize = 100;
            for ($start = 100; $start < $total; $start += $pageSize) {
                $result = $this->postIpo($start, $pageSize);
                $allData = array_merge($allData, $result['data'] ?? []);
                usleep(300000); // 300ms delay between requests
            }

            Log::info('Total fetched: ' . count($allData));

            return $this->parseIpoData($allData);
        } catch (\Exception $e) {
            Log::error('scrapeAllIpos failed: ' . $e->getMessage());
            return [];
        }
    }

    protected function parseIpoData(array $data): array
    {
        $result = [];

        foreach ($data as $item) {
            $name = isset($item['name']) ? strip_tags($item['name']) : '';

            // Parse GMP e.g. "16 (7.0%)  "
            $gmpRaw = trim($item['premium'] ?? '');
            $gmpValue = null;
            $gmpPercent = null;

            if ($gmpRaw !== '' && $gmpRaw !== '0') {
                preg_match('/([-\d.]+)\s*\(([-\d.]+)%\)/', $gmpRaw, $m);
                $gmpValue = isset($m[1]) ? (float) $m[1] : null;
                $gmpPercent = isset($m[2]) ? (float) $m[2] : null;
            }

            // Lead managers
            $leadManagers = [];
            if (!empty($item['lead_managers']) && is_array($item['lead_managers'])) {
                foreach ($item['lead_managers'] as $lm) {
                    $leadManagers[] = $lm['name'] ?? '';
                }
            }

            $result[] = [
                'id'             => $item['id'] ?? null,
                'name'           => trim($name),
                'script_code'    => $item['script_code'] ?? null,
                'open_date'      => $item['open'] ?? null,
                'close_date'     => $item['close'] ?? null,
                'allotment_date' => $item['allotment_date'] ?? null,
                'listing_date'   => $item['listing_date'] ?? null,
                'price_band'     => $item['price'] ?? null,
                'min_price'      => $item['min_price'] ?? null,
                'max_price'      => $item['max_price'] ?? null,
                'lot_size'       => $item['lot_size'] ?? null,
                'issue_size_cr'  => $item['issue_size'] ?? null,
                'gmp_value'      => $gmpValue,
                'gmp_percent'    => $gmpPercent,
                'gmp_raw'        => $gmpRaw,
                'status'         => $item['current_status'] ?? null,
                'listing_price'  => $item['listing_price'] ?? null,
                'lead_managers'  => $leadManagers,
                'allotment_link' => $item['allotment_link'] ?? null,
                'slug'           => $item['slug'] ?? null,
                'icon_url'       => $item['icon_url'] ?? null,
            ];
        }

        return $result;
    }

    public function getGmpData(): array
    {
        return array_values(
            array_filter($this->scrapeIpoList(200), fn($i) => $i['gmp_value'] !== null)
        );
    }

    public function getOpenIpos(): array
    {
        return array_values(
            array_filter($this->scrapeIpoList(200), fn($i) => $i['status'] === 'open')
        );
    }

    public function getUpcomingIpos(): array
    {
        return array_values(
            array_filter($this->scrapeIpoList(200), fn($i) => $i['status'] === 'upcoming')
        );
    }

    public function getClosedIpos(): array
    {
        return array_values(
            array_filter($this->scrapeIpoList(200), fn($i) => $i['status'] === 'closed')
        );
    }

    public function scrapeIpoDetail(int $id, string $slug): array
    {
        $url = "https://www.ipopremium.in/view/ipo/{$id}/{$slug}";

        $html = \Illuminate\Support\Facades\Http::withHeaders([
            'User-Agent'      => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Chrome/120 Safari/537.36',
            'Accept'          => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language' => 'en-US,en;q=0.5',
        ])->get($url)->body();

        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);

        return [
            'id'   => $id,
            'slug' => $slug,
            'url'  => $url,
            'raw_html_length' => strlen($html),
            'page_title' => $crawler->filter('title')->count()
                ? trim($crawler->filter('title')->text()) : null,
            'h1'         => $crawler->filter('h1')->count()
                ? trim($crawler->filter('h1')->text()) : null,
            'h2_list'    => $crawler->filter('h2')->each(fn($n) => trim($n->text())),
            'h3_list'    => $crawler->filter('h3')->each(fn($n) => trim($n->text())),
            'tables'     => $crawler->filter('table')->each(function ($table, $i) {
                $rows = $table->filter('tr')->each(function ($tr) {
                    return $tr->filter('td, th')->each(fn($cell) => trim($cell->text()));
                });
                return ['table_index' => $i, 'rows' => $rows];
            }),
            'all_divs_with_class' => $crawler->filter('div[class]')->each(function ($el) {
                return [
                    'class' => $el->attr('class'),
                    'text'  => substr(trim($el->text()), 0, 300),
                ];
            }),
        ];
    }
}
