<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_type>
 */
class Product_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('hu_HU')->unique()->word,
            //lehet nem lesz jó||^
            'description' => $this->faker->sentence(),
            'cost' => rand(500, 10000),
        ];
    }
}
