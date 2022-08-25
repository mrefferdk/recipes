<?php

namespace App\Http\Services\Scrapers;

use App\Exceptions\MissingRecipeNumberOfPersons;
use Illuminate\Support\Facades\Http;

class Valdemarsrodk implements ScraperInterface
{
    public string $html;

    public function __construct(string $url)
    {
        $this->html = $this->loadPageHtml($url);
    }

    public function scrapeAndGetContent(): array
    {
        $instructions = $this->getInstructions();
        $title = $this->getTitle();
        $imageSrc = $this->getImageSrc();
        $totalTime = $this->getTotalTime();
        $workTime = $this->getWorkTime();
        $ingredients = $this->getIngredients();
        try {
            $persons = $this->getNumberOfPersons();
        } catch (MissingRecipeNumberOfPersons $e) {
            $persons = 4;
        }

        return [
            'title' => $title,
            'imageSrc' => $imageSrc,
            'persons' => $persons,
            'instructions' => $instructions,
            'ingredients' => $ingredients,
            'workTime' => $workTime,
            'totalTime' => $totalTime,
        ];
    }

    private function getMetaData(): string
    {
        $html = preg_replace('@</p>(\s*)\n@', '</p>', $this->html);
        $html = preg_replace('@<br />(\s*)\n@', '</br />', $html);

        $pattern = '@<div class="post-recipe">(.*)\n(.*)@m';
        if (!preg_match($pattern, $html, $matches)) {
            throw new \Exception('HTML is not as expected');
        }

        return $matches[1];

    }

    private function loadPageHtml(string $url): string
    {
        $content = Http::get($url)->body();
        if (!$content) {
            throw new \Exception('URL not found');
        }
        return $content;
    }

    private function getTitle(): string
    {
        $pattern = '@h2 itemprop="name">([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return $matches[1];
    }

    private function getImageSrc(): string
    {
        $pattern = '@<meta property="og:image" content="([^"]*)@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }

    private function getNumberOfPersons(): int
    {
        $pattern = '@\'pers.\', (\d)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        if (!isset($matches[1])) {
            throw new MissingRecipeNumberOfPersons;
        }

        return $matches[1];
    }

    private function getInstructions(): string
    {
        $pattern = '@<div itemprop="recipeInstructions" class="content">(.*)$@';
        preg_match($pattern, $this->getMetaData(), $matches);

        $descriptionString = $matches[1];

        // Remove garbage in the end
        if ($lastTagPos = mb_strrpos($descriptionString, '</p>')) {
            $descriptionString = mb_substr($descriptionString, 0, $lastTagPos+4);
        }

        return $descriptionString;
    }

    private function getWorkTime(): int
    {
        $pattern = '@Arbejdstid</span><strong>([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return (int) $matches[1];
    }

    private function getTotalTime(): int
    {
        $pattern = '@Tid i alt</span><strong>([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return (int) $matches[1];
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function getIngredients(): array
    {
        $ingredients = [];
        $pattern = '@<li itemprop="recipeIngredient">([^<]*)@';
        preg_match_all($pattern, $this->getMetaData(), $matches);

        foreach ($matches[1] as $ingredientString) {
            $patternAmountUnitText = '@([^\s]+)\s([^\s]+)\s(.*)@';
            preg_match($patternAmountUnitText, $ingredientString, $ingredientMatches);
            if ($ingredientMatches) {
                $ingredients[] = [
                    'amount' => $ingredientMatches[1],
                    'unit' => $ingredientMatches[2],
                    'text' => $ingredientMatches[3],
                ];
                continue;
            }

            $patternAmountText = '@([^\s]+)\s(.*)@';
            preg_match($patternAmountText, $ingredientString, $ingredientMatches);
            if ($ingredientMatches) {
                $ingredients[] = [
                    'amount' => $ingredientMatches[1],
                    'unit' => null,
                    'text' => $ingredientMatches[2],
                ];
                continue;
            }
            $patternAmountText = '@([^\s]+)@';
            preg_match($patternAmountText, $ingredientString, $ingredientMatches);
            if ($ingredientMatches) {
                $ingredients[] = [
                    'amount' => null,
                    'unit' => null,
                    'text' => $ingredientMatches[1],
                ];
                continue;
            }

            throw new \Exception('Problem translation ingredient string: ' .$ingredientString);
        }

        if (!$ingredients) {
            throw new \Exception('No ingredients found');
        }
        return $ingredients;
    }



}
