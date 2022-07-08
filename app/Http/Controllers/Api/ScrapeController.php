<?php

namespace App\Http\Controllers\Api;

use App\Http\Adapters\NemligDotCom\IngredientAdapter;
use App\Http\Adapters\NemligDotCom\RecipeAdapter;
use App\Http\Services\Scrapers\NemligDotComService;
use App\Http\Services\ScrapeService;
use App\Models\Recipe;
use App\Models\ScrapedRecipe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ScrapeService $scrapeService)
    {
        if ($scrapeService->isAlreadyScraped($request->get('url'))) {
            return response()->json(['error' => 'This URL is already scraped'], 400);
        }

        $hostname = parse_url($request->get('url'), PHP_URL_HOST);
        switch ($hostname) {
            // Test URL https://www.nemlig.com/opskrifter/sproed-spidskaalssalat-noedder-aebler-98000352
            case 'www.nemlig.com':
                /** @var NemligDotComService $nemligDotComService */
                $nemligDotComService = app(NemligDotComService::class, ['url' => $request->get('url')]);
                $content = $nemligDotComService->scrapeAndGetContent();


                $recipe = RecipeAdapter::adapt($content);
                $recipe->save();


                if ($content['imageSrc'] && $image = file_get_contents($content['imageSrc'])) {
                    $filename = $recipe->id . '.jpg';
                    $filepath = '/public/' . Recipe::FILE_UPLOAD_PATH . '/' . $filename;
                    if (Storage::disk('local')->put($filepath, $image)) {
                        $recipe->image_path = $filename;
                        $recipe->save();
                    }
                }

                $ingredients = [];
                $ingredientCounter = 0;
                foreach (Arr::get($content, 'ingredients', []) as $ingredientArray) {
                    $ingredients[] = IngredientAdapter::adapt($ingredientArray, $ingredientCounter++);
                }
                $recipe->ingredients()->saveMany($ingredients);

                // save scrape record
                $scrapedRecipe = new ScrapedRecipe([
                    'recipe_id' => $recipe->id,
                    'url' => $request->get('url'),
                ]);
                $scrapedRecipe->save();

                return response()->json(['recipe' => $recipe->toArray(), 'url' => '/recipes/' . $recipe->id]);

            default:
                return response()->json(['error' => 'No scraper found for provided domain'], 501);
        }
    }

}
