<?php

namespace App\Http\Services;

class NemligDotCom
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
        dd($ingredients, $title,$imageSrc, $description, $persons, $instructions, 'wee');
    }

    /**
     * Denne her returnerer vist al data der skal bruges
     */
    public function getMetaData()
    {
        $pattern = '@"content":(.*)\r\n@';
        preg_match($pattern, $this->html, $matches);
        $json = $matches[1];
        $trimmed = trim($json);
        $trimmed = rtrim($json, ',');
        dd(json_decode($trimmed));
        die();
        return $json;
    }

    public function loadPageHtml($url)
    {
        return file_get_contents($url);
    }

    public function getTitle()
    {
        $pattern = '@"name": "([^"]+)"@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }

    public function getImageSrc()
    {
        $pattern = '@"image": "([^"]+)"@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }

    public function getDescription()
    {
        $pattern = '@"description": "([^"]+)"@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }

    public function getNumberOfPersons()
    {
        $pattern = '@"recipeYield": "([^"]+)"@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }

    public function getInstructions()
    {
        $pattern = '@"recipeInstructions": "([^"]+)"@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
    }


}
