<?php

namespace App\Http\Controllers\Api;

use App\Http\Services\NemligDotCom;
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
        $nemligDotComService = app(NemligDotCom::class, ['url' => "https://www.nemlig.com/opskrifter/sproed-spidskaalssalat-noedder-aebler-98000352"]);
        $nemligDotComService->scrape();
        die('hmm');
    }

}
