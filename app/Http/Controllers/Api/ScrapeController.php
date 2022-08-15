<?php

namespace App\Http\Controllers\Api;

use App\Http\Services\ScrapeService;
use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request, ScrapeService $scrapeService)
    {
        // TODO create middleware for this
        if ($scrapeService->isAlreadyScraped($request->get('url'))) {
            return response()->json(['error' => 'This URL is already scraped'], 400);
        }

        try {
            $recipe = $scrapeService->scrapeAndSave($request->get('url'));
            return response()->json(['recipe' => $recipe->toArray(), 'url' => '/recipes/' . $recipe->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'No scraper found for provided domain or some other error has occured'], 501);
        }
    }
}
