<?php

namespace App\Http\Controllers\Api;

use App\Http\Adapters\NemligDotCom\RecipeAdapter;
use App\Http\Services\NemligDotComService;
use Illuminate\Http\Request;
use App\Models\Recipe;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // IF NEMLIG.COM
        $nemligDotComService = app(NemligDotComService::class, ['url' => "https://www.nemlig.com/opskrifter/sproed-spidskaalssalat-noedder-aebler-98000352"]);
        $content = $nemligDotComService->scrapeAndGetContent();
        $recipe = RecipeAdapter::adapt($content);
        dd('hmm', $recipe);
    }

}
