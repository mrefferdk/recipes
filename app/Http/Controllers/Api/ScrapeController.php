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
    public function index(Request $request)
    {

        $hostname = parse_url($request->get('url'), PHP_URL_HOST);
        switch ($hostname) {
            // Test URL https://www.nemlig.com/opskrifter/sproed-spidskaalssalat-noedder-aebler-98000352
            case 'www.nemlig.com':
                $nemligDotComService = app(NemligDotComService::class, ['url' => $request->get('url')]);
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

            default:
                return response()->json(['error' => 'No scraper found for provided domain'], 501);
        }
    }

}
