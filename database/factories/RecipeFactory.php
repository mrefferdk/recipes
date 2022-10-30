<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
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
        //$this->faker->addProvider('Lorem');
        $factory = \Faker\Factory::create('en');
        $this->faker->addProvider(new \Faker\Provider\Lorem($this->faker));
        return [
            'title' => $this->faker->numberBetween(),
            'body' => $this->faker->sentence(),
            'number' => $this->faker->numberBetween(1, 10),
            'cooking_time' => $this->faker->numberBetween(1, 120),
            'work_time' => $this->faker->numberBetween(1, 120),
            'active' => $this->faker->numberBetween(0, 1),
            'image_path' => $this->faker->numberBetween(0, 2) . '.jpg',
            'user_id' => 1,
        ];
    }
}
