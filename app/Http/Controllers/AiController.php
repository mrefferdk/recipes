<?php

namespace App\Http\Controllers;

use App\Http\Services\AccessService;
use App\Http\Services\RecipeService;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\View\View;
use Orhanerday\OpenAi\OpenAi;

class AiController extends Controller
{

    private $openAi;
    public function __construct()
    {
        $this->openAi = new OpenAi('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');
    }
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {


        /*$handle = opendir('./');
        $filename = './storage/uploads/50.jpg';
        while($dir = readdir($handle)) {
        //    dump($dir);
        }
        //dd($dir);
        $png = imagepng(imagecreatefromstring(file_get_contents($filename)), "test.png");
        //dd(strlen(file_get_contents('./test.png'))/1000000);

        //$variant = $open_ai->

        $file = null;
        if ($stream = fopen('./test.png', 'r')) {
            // print all the page starting at the offset 10
            $file =  stream_get_contents($stream);

            fclose($stream);
        }


        $image = json_decode($open_ai->imageVariant([
            'image' => '@test.png',
        ]));
        dd($image);
        echo "<img src='{$image->data[0]->url}'/>";
dd();*/
        $images = json_decode($this->openAi->image([
            'prompt' => 'shawshank redemption movie poster',
            'n' => 5,
        ]));
        foreach ($images->data as $image) {
            echo "<img src='{$image->url}'/>";

        }


dd();

        $complete = $open_ai->complete([
            'engine' => 'davinci',
            'prompt' => 'Hello',
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);

        var_dump($complete);
        echo "wee";
    }


    public function movieTest()
    {
        $movies = [
            /*'Lord of the rings',
            'Mission impossible',
            'james bond',
            'evil dead',
            '28 days later',
            'the hobbit',
            'pretty woman',
            'batman',*/
            'Horror'
        ];


        $movie = $movies[rand(0,count($movies)-1)];

        $images = json_decode($this->openAi->image([
            //'prompt' => $movie . " movie poster",
            'prompt' => "angry fat lady eating a banana",
            'n' => 1,
        ]));


        return view('movie', ['image' => $images->data[0]->url, 'title' => $movie]);
    }


}
