<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 999999.99),
            'stock' => fake()->numberBetween(-10000, 10000),
            'category_id' => Category::factory(),
        ];
    }
}
