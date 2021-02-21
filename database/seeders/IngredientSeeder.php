<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use \App\Models\Recipe;

class IngredientSeeder extends Seeder
{
    private $order = 0;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe = Recipe::all()->first();
        for ($i = 0; $i < 10; $i++) {
            $this->insert($recipe);
        }

    }

    private function insert($recipe)
    {
        DB::table('ingredients')->insert([
            'name' => Str::random(30),
            'type' => Str::random(10),
            'amount' => 4,
            'order' => $this->order++,
            'recipe_id' => $recipe->id
        ]);
    }
}
