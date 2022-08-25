<?php

namespace App\Http\Services;

use App\Http\Adapters\RecipeAdapterInterface;

class RecipeAdapterService
{

    public function getAdapter(string $url): RecipeAdapterInterface
    {
        $folderName = $this->getFolderNameFromUrl($url);
        return app('App\Http\Adapters\\' . $folderName . '\RecipeAdapter');
    }

    private function getFolderNameFromUrl(string $url): string
    {
        $hostname = parse_url($url, PHP_URL_HOST);
        $hostname = str_replace(['www','.'], '', $hostname);
        return ucfirst(strtolower($hostname));
    }
}
