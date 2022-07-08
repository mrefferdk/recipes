<?php

namespace App\Http\Services;

use App\Models\Ingredient;
use Illuminate\Support\Arr;

class RecipeService
{
    public $html;

    public function __construct(private string $url)
    {
        $this->html = $this->loadPageHtml($url);
    }

    public function scrape()
    {
        $title = $this->getTitle();
        $imageSrc = $this->getImageSrc();
        $description = $this->getDescription();
        $persons = $this->getNumberOfPersons();
        $instructions = $this->getInstructions();
        $ingredients = $this->getIngredients();


    }

    /**
     * Denne her returnerer vist al data der skal bruges
     */
    public function getMetaData(): array
    {
        $pattern = '@"content":(.*)\r\n@';
        preg_match($pattern, $this->html, $matches);
        $json = $matches[1];
        $trimmed = rtrim($json, ',');
        $array = json_decode($trimmed, true);
        return $array[0];
    }

    public function loadPageHtml($url)
    {
        return file_get_contents($url);
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

    /**
     * @return array<Ingredient>
     * @throws \Exception
     */
    public function getIngredients(): array
    {
        $ingredients = [];
        $groups = Arr::get($this->getMetaData(), 'IngredientGroups');
        foreach ($groups as $group) {
            foreach (Arr::get($group, 'Ingredients') as $ingredient) {
                $amount = Arr::get($ingredient, 'Amount');
                $unit = Arr::get($ingredient, 'Unit');
                $text = Arr::get($ingredient, 'Text');
                $ingredient = new Ingredient([
                    'name' => $text,
                    'amount' => $amount,
                    'type' => $unit]);
                $ingredients[] = $ingredient;
            }
        }
        if (!$ingredients) {
            throw new \Exception('Der er ingen ingredienser!?');
        }
        return $ingredients;
    }



}
