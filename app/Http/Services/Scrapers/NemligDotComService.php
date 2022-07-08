<?php

namespace App\Http\Services\Scrapers;

use Illuminate\Support\Arr;

class NemligDotComService
{
    public $html;

    public function __construct(private string $url)
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

    public function getMetaData(): array
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

    public function loadPageHtml($url)
    {
        // TODO use Guzzle to be able to Mock this
        $content = file_get_contents($url);
        if (!$content) {
            throw new \Exception('URL not found');
        }
        return $content;
    }

    public function getTitle()
    {
        return Arr::get($this->getMetaData(), 'Header');
    }

    public function getImageSrc()
    {
        return Arr::get($this->getMetaData(), 'Media.0.Url');
    }

    public function getDescription()
    {
        return Arr::get($this->getMetaData(), 'MetaTitle');
    }

    public function getNumberOfPersons()
    {
        return Arr::get($this->getMetaData(), 'NumberOfPersons');
    }

    public function getInstructions()
    {
        return Arr::get($this->getMetaData(), 'Instructions');
    }

    public function getWorkTime()
    {
        return Arr::get($this->getMetaData(), 'WorkTime');
    }

    public function getTotalTime()
    {
        return Arr::get($this->getMetaData(), 'TotalTime');
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getIngredients(): array
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
