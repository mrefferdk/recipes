<?php

namespace App\Http\Controllers\Api;

use App\Http\Adapters\NemligDotCom\IngredientAdapter;
use App\Http\Adapters\NemligDotCom\RecipeAdapter;
use App\Http\Services\NemligDotComService;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Arr;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // if == NEMLIG.COM
        $nemligDotComService = app(NemligDotComService::class, ['url' => "https://www.nemlig.com/opskrifter/sproed-spidskaalssalat-noedder-aebler-98000352"]);
        $content = $nemligDotComService->scrapeAndGetContent();
        $recipe = RecipeAdapter::adapt($content);
        $recipe->save();

        $ingredients = [];
        $ingredientCounter = 0;
        foreach (Arr::get($content, 'ingredients', []) as $ingredientArray) {
            $ingredients[] = IngredientAdapter::adapt($ingredientArray, $ingredientCounter++);
        }
        $recipe->ingredients()->saveMany($ingredients);

        return response()->json(['recipe_id' => $recipe->id]);
    }

}
