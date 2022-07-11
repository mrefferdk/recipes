<?php

namespace App\Http\Services\Scrapers;

use Illuminate\Support\Arr;

class ValdemarsroService
{
    public $html;

    public function __construct(private string $url)
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
        $description = $this->getDescription();
        $persons = 4; // $this->getNumberOfPersons();

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

    public function getMetaData(): string
    {
        $html = preg_replace('@</p>(\s*)\n@', '</p>', $this->html);
        $html = preg_replace('@<br />(\s*)\n@', '</br />', $html);

        $pattern = '@<div class="post-recipe">(.*)\n(.*)@m';
        if (!preg_match($pattern, $html, $matches)) {
            throw new \Exception('HTML is not as expected');
        }

        return $matches[1];

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

    public function getTitle(): string
    {
        $pattern = '@h2 itemprop="name">([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return $matches[1];
    }

    public function getImageSrc()
    {
        $pattern = '@<meta property="og:image" content="([^"]*)@';
        preg_match($pattern, $this->html, $matches);
        return $matches[1];
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
        //
        $pattern = '@<div itemprop="recipeInstructions" class="content">(.*)$@';
        preg_match($pattern, $this->getMetaData(), $matches);

        $descriptionString = $matches[1];

        // Remove garbage in the end
        if ($lastTagPos = mb_strrpos($descriptionString, '</p>')) {
            $descriptionString = mb_substr($descriptionString, 0, $lastTagPos+4);
        }

        return $descriptionString;
    }

    public function getWorkTime()
    {
        $pattern = '@Arbejdstid</span><strong>([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return $matches[1];
    }

    public function getTotalTime()
    {
        $pattern = '@Tid i alt</span><strong>([^<]*)@';
        preg_match($pattern, $this->getMetaData(), $matches);
        return $matches[1];
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getIngredients(): array
    {
        $ingredients = [];
        $pattern = '@<li itemprop="recipeIngredient">([^<]*)@';
        preg_match_all($pattern, $this->getMetaData(), $matches);

        $pattern = '@([^\s]+)\s([^\s]+)\s(.*)@';
        foreach ($matches[1] as $ingredientString) {
            preg_match($pattern, $ingredientString, $ingredientMatches);
            $amount = $ingredientMatches[1];
            $unit = $ingredientMatches[2];
            $text = $ingredientMatches[3];

            $ingredients[] = [
                'amount' => $amount,
                'unit' => $unit,
                'text' => $text,
            ];
        }

        if (!$ingredients) {
            throw new \Exception('No ingredients found');
        }
        return $ingredients;
    }



}
