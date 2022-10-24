<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'body' => $this->faker->paragraphs(10, true),
            'number' => $this->faker->numberBetween(1, 10),
            'cooking_time' => $this->faker->numberBetween(1, 120),
            'work_time' => $this->faker->numberBetween(1, 120),
            'active' => $this->faker->numberBetween(0, 1),
            'image_path' => $this->faker->numberBetween(0, 2) . '.jpg',
            'user_id' => 1,
        ];
    }
}
