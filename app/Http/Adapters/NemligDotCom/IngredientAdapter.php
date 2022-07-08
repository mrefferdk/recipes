<?php

namespace App\Http\Adapters\NemligDotCom;

use App\Models\Ingredient;
use Illuminate\Support\Arr;

class IngredientAdapter
{
    static public function adapt(array $data, int $order = 0): Ingredient
    {
        $amount = Arr::get($data, 'amount');
        $unit = Arr::get($data, 'unit');
        $text = Arr::get($data, 'text');


        $ingredient = new Ingredient([
            'name' => $text,
            'amount' => $amount,
            'type' => $unit,
            'order' => $order,
        ]);

        return $ingredient;
    }
}
