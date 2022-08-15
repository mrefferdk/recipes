<?php

namespace App\Http\Services;

use App\Http\Adapters\NemligDotCom\IngredientAdapter;
use App\Http\Adapters\NemligDotCom\RecipeAdapter;
use App\Http\Services\Scrapers\ScraperInterface;
use App\Models\Recipe;
use App\Models\ScrapedRecipe;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ScrapeService
{

    public function isAlreadyScraped(string $url)
    {
        $found = ScrapedRecipe::where('url', $url)->count();
        return $found !== 0;
    }

    public function scrapeAndSave(string $url): Recipe
    {
        $scraper = $this->getScraper($url);
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
            'url' => $url,
        ]);
        $scrapedRecipe->save();

        return $recipe;
    }

    private function getScraper(string $url): ScraperInterface
    {
        $scraperClassName = $this->getScraperClassNameFromUrl($url);
        $scraper = app('App\Http\Services\Scrapers\\' . $scraperClassName, ['url' => $url]);
        if (!is_a($scraper, ScraperInterface::class)) {
            throw new \Exception('Scraper class ' . $scraperClassName . ' does not implement ' . ScraperInterface::class);
        }

        return $scraper;
    }

    private function getScraperClassNameFromUrl(string $url): string
    {
        $hostname = parse_url($url, PHP_URL_HOST);
        $hostname = str_replace(['www','.'], '', $hostname);
        return ucfirst(strtolower($hostname));
    }


}
