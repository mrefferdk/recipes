<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Database\Factories\RecipeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory()
            ->has(Ingredient::factory()->count(10))
            ->count(10)
            ->create();
    }
}
