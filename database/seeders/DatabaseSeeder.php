<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RecipeSeeder;
use Database\Seeders\IngredientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RecipeSeeder::class,
            IngredientSeeder::class,

        ]);
    }
}
