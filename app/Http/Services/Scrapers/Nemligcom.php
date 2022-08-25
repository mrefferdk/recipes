<?php

namespace App\Http\Services\Scrapers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class Nemligcom implements ScraperInterface
{
    public string $html;

    public function __construct(string $url)
    {
        $this->html = $this->loadPageHtml($url);
    }

    public function scrapeAndGetContent(): array
    {
        $title = $this->getTitle();
        $imageSrc = $this->getImageSrc();
        $description = $this->getDescription();
        $persons = $this->getNumberOfPersons();
        $instructions = $this->getInstructions();
        $ingredients = $this->getIngredients();
        $workTime = $this->getWorkTime();
        $totalTime = $this->getTotalTime();

        return [
            'title' => $title,
            'imageSrc' => $imageSrc,
            'description' => $description,
            'persons' => $persons,
            'instructions' => $instructions,
            'ingredients' => $ingredients,
            'workTime' => $workTime,
            'totalTime' => $totalTime,
        ];
    }

    private function getMetaData(): array
    {
        $pattern = '@"content":(.*)\r\n@';
        if (!preg_match($pattern, $this->html, $matches)) {
            throw new \Exception('HTML is not as expected');
        }
        $json = $matches[1];
        $trimmed = rtrim($json, ',');
        $array = json_decode($trimmed, true);
        return $array[0];
    }

    private function loadPageHtml($url): string
    {
        $content = Http::get($url)->body();
        if (!$content) {
            throw new \Exception('URL not found');
        }
        return $content;
    }

    private function getTitle(): ?string
    {
        return Arr::get($this->getMetaData(), 'Header');
    }

    private function getImageSrc(): ?string
    {
        return Arr::get($this->getMetaData(), 'Media.0.Url');
    }

    private function getDescription(): ?string
    {
        return Arr::get($this->getMetaData(), 'MetaTitle');
    }

    private function getNumberOfPersons(): int
    {
        return (int) Arr::get($this->getMetaData(), 'NumberOfPersons');
    }

    private function getInstructions(): ?string
    {
        return Arr::get($this->getMetaData(), 'Instructions');
    }

    private function getWorkTime(): int
    {
        return (int) Arr::get($this->getMetaData(), 'WorkTime');
    }

    private function getTotalTime(): int
    {
        return (int) Arr::get($this->getMetaData(), 'TotalTime');
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function getIngredients(): array
    {
        $ingredients = [];
        $groups = Arr::get($this->getMetaData(), 'IngredientGroups', []);
        foreach ($groups as $group) {
            foreach (Arr::get($group, 'Ingredients') as $ingredient) {
                $amount = Arr::get($ingredient, 'Amount');
                $unit = Arr::get($ingredient, 'Unit');
                $text = Arr::get($ingredient, 'Text');

                $ingredients[] = [
                    'amount' => $amount,
                    'unit' => $unit,
                    'text' => $text,
                ];
            }
        }
        if (!$ingredients) {
            throw new \Exception('No ingredients found');
        }
        return $ingredients;
    }
}
