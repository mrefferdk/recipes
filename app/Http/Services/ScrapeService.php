<?php

namespace App\Http\Services;

use App\Models\ScrapedRecipe;

class ScrapeService
{

    public function isAlreadyScraped(string $url)
    {
        $found = ScrapedRecipe::where('url', $url)->count();
        return $found !== 0;
    }


}
