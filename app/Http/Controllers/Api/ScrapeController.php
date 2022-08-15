<?php

namespace App\Http\Controllers\Api;

use App\Http\Adapters\NemligDotCom\IngredientAdapter;
use App\Http\Adapters\NemligDotCom\RecipeAdapter;
use App\Http\Services\Scrapers\ScraperInterface;
use App\Http\Services\ScrapeService;
use App\Models\Recipe;
use App\Models\ScrapedRecipe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ScrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request, ScrapeService $scrapeService)
    {
        // TODO move logic out of controller
        // TODO create middleware for this
        if ($scrapeService->isAlreadyScraped($request->get('url'))) {
            return response()->json(['error' => 'This URL is already scraped'], 400);
        }

        // TODO Also add this in middleware
        $scraperClassName = $this->getScraperClassName($request->get('url'));
        $scraper = app('App\Http\Services\Scrapers\\' . $scraperClassName, ['url' => $request->get('url')]);
        if (!is_a($scraper, ScraperInterface::class)) {
            throw new \Exception('Scraper class ' . $scraperClassName . ' does not implement ' . ScraperInterface::class);
        }

        $content = $scraper->scrapeAndGetContent();
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
        return response()->json(['error' => 'No scraper found for provided domain'], 501);
    }

    private function getScraperClassName(string $url): string
    {
        $hostname = parse_url($url, PHP_URL_HOST);
        $hostname = str_replace(['www','.'], '', $hostname);
        return ucfirst(strtolower($hostname));
    }

}
