<?php

namespace App\Http\Controllers\Api;

use App\Http\Services\ScrapeService;
use App\Http\Services\UserHashService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function store(Request $request, ScrapeService $scrapeService)
    {
        // TODO we use this home brew solution, because there's no Auth()->user() when calling API routes. Find out how to do this properly with Sanctum
        $userId = $request->get('userId');

        $url = $request->get('url');
        // TODO create middleware for this
        if ($scrapeService->isAlreadyScraped($url)) {
            return response()->json(['error' => 'This URL is already scraped'], 400);
        }

        try {
            $recipe = $scrapeService->scrapeAndSave($url, $userId);
            return response()->json(['recipe' => $recipe->toArray(), 'url' => '/recipes/' . $recipe->id]);
        } catch (Exception $e) {
            Log::error('Exception found in '. __METHOD__ . ' with url: ' . $url, ['e' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
            return response()->json(['error' => 'No scraper found for provided domain or some other error has occured'], 501);
        }
    }
}
