<?php

use App\Http\Controllers\ScraperController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ScraperController::class, 'index']); 

Route::prefix('ipo')->group(function () {
    Route::get('/all', [ScraperController::class, 'all']); 
    Route::get('/gmp', [ScraperController::class, 'gmp']);
    Route::get('/open', [ScraperController::class, 'open']);
    Route::get('/upcoming', [ScraperController::class, 'upcoming']);
    Route::get('/closed', [ScraperController::class, 'closed']);
    Route::get('/{id}/{slug}', [ScraperController::class, 'detail']);
});

// routes/api.php — temporary debug
Route::get('/ipo/debug', function () {
    $jar = new \GuzzleHttp\Cookie\CookieJar();
    $client = new \GuzzleHttp\Client(['verify' => false, 'allow_redirects' => true]);

    // Step 1: GET homepage (not /ipo) to get cookie + CSRF
    $res = $client->get('https://www.ipopremium.in/', [
        'cookies' => $jar,
        'headers' => [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
            'Accept'     => 'text/html,application/xhtml+xml,*/*',
        ],
    ]);

    $html = $res->getBody()->getContents();
    $crawler = new \Symfony\Component\DomCrawler\Crawler($html);

    // Get CSRF token
    $csrf = null;
    try {
        $csrf = $crawler->filter('meta[name="csrf-token"]')->attr('content');
    } catch (\Exception $e) {
    }
    try {
        $csrf = $csrf ?? $crawler->filter('input[name="_token"]')->attr('value');
    } catch (\Exception $e) {
    }

    // Get cookies
    $cookies = [];
    foreach ($jar->toArray() as $cookie) {
        $cookies[$cookie['Name']] = $cookie['Value'];
    }

    // Try all variations of POST to /ipo
    $attempts = [];

    // Attempt 1: JSON empty body
    try {
        $r = $client->post('https://www.ipopremium.in/ipo', [
            'cookies' => $jar,
            'headers' => [
                'User-Agent'       => 'Mozilla/5.0',
                'Accept'           => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest',
                'X-CSRF-TOKEN'     => $csrf,
                'Referer'          => 'https://www.ipopremium.in/',
            ],
            'json' => [],
        ]);
        $attempts['json_empty'] = [
            'status' => $r->getStatusCode(),
            'body'   => substr($r->getBody()->getContents(), 0, 500),
        ];
    } catch (\Exception $e) {
        $attempts['json_empty'] = ['error' => $e->getMessage()];
    }

    // Attempt 2: form_params with _token
    try {
        $r = $client->post('https://www.ipopremium.in/ipo', [
            'cookies' => $jar,
            'headers' => [
                'User-Agent'       => 'Mozilla/5.0',
                'Accept'           => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest',
                'Referer'          => 'https://www.ipopremium.in/',
            ],
            'form_params' => [
                '_token' => $csrf,
            ],
        ]);
        $attempts['form_token'] = [
            'status' => $r->getStatusCode(),
            'body'   => substr($r->getBody()->getContents(), 0, 500),
        ];
    } catch (\Exception $e) {
        $attempts['form_token'] = ['error' => $e->getMessage()];
    }

    // Attempt 3: form_params with filters
    try {
        $r = $client->post('https://www.ipopremium.in/ipo', [
            'cookies' => $jar,
            'headers' => [
                'User-Agent'       => 'Mozilla/5.0',
                'Accept'           => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest',
                'Referer'          => 'https://www.ipopremium.in/',
            ],
            'form_params' => [
                '_token' => $csrf,
                'type'   => 'all',
                'page'   => 1,
            ],
        ]);
        $attempts['form_with_filters'] = [
            'status' => $r->getStatusCode(),
            'body'   => substr($r->getBody()->getContents(), 0, 500),
        ];
    } catch (\Exception $e) {
        $attempts['form_with_filters'] = ['error' => $e->getMessage()];
    }

    // Attempt 4: check what inline JS says on homepage
    $inlineJs = [];
    $crawler->filter('script')->each(function ($node) use (&$inlineJs) {
        $content = $node->text();
        if (
            str_contains($content, '/ipo') ||
            str_contains($content, 'axios') ||
            str_contains($content, 'fetch') ||
            str_contains($content, 'XMLHttpRequest')
        ) {
            $inlineJs[] = substr($content, 0, 800);
        }
    });

    return response()->json([
        'csrf'      => $csrf,
        'cookies'   => $cookies,
        'inline_js' => $inlineJs,
        'attempts'  => $attempts,
    ]);
});
