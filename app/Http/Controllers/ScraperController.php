<?php

namespace App\Http\Controllers;

use App\Services\WebScraper;
use Illuminate\Http\JsonResponse;

class ScraperController extends Controller
{
    public function __construct(protected WebScraper $scraper) {}

    // GET /api/ipo — latest 100
    public function index()
    {
        $data = $this->scraper->scrapeIpoList(100);
        //    dd($data);

        return view('ipo.index', compact('data'));
    }

    public function detail(int $id, string $slug)
    {
        $data = $this->scraper->scrapeIpoDetail($id, $slug);
        // info($data);
        // dd($data);
        return view('ipo.detail', compact('data'));
    }

    // GET /api/ipo/all — all 1102 records (slow, use with cache)
    public function all(): JsonResponse
    {
        $data = $this->scraper->scrapeAllIpos();

        return response()->json([
            'success' => true,
            'total'   => count($data),
            'data'    => $data,
        ]);
    }

    // GET /api/ipo/gmp
    public function gmp(): JsonResponse
    {
        $data = $this->scraper->getGmpData();

        return response()->json([
            'success' => true,
            'total'   => count($data),
            'data'    => $data,
        ]);
    }

    // GET /api/ipo/open
    public function open(): JsonResponse
    {
        $data = $this->scraper->getOpenIpos();

        return response()->json([
            'success' => true,
            'total'   => count($data),
            'data'    => $data,
        ]);
    }

    // GET /api/ipo/upcoming
    public function upcoming(): JsonResponse
    {
        $data = $this->scraper->getUpcomingIpos();

        return response()->json([
            'success' => true,
            'total'   => count($data),
            'data'    => $data,
        ]);
    }

    // GET /api/ipo/closed
    public function closed(): JsonResponse
    {
        $data = $this->scraper->getClosedIpos();

        return response()->json([
            'success' => true,
            'total'   => count($data),
            'data'    => $data,
        ]);
    }
}
