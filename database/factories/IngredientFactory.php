<?php

namespace Database\Factories;

use App\Models\ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ingredient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'amount' => $this->faker->numberBetween(1,10),
            'type' => $this->faker->word(),
            'order' => $this->faker->numberBetween(1,100),
        ];
    }
}
