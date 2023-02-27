<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'main_price' => random_int(100, 1500),
            'sale' => random_int(1, 60),
            'is_stock' => 1,
            'description' => $this->faker->text(),
            'category_id' => 1
        ];
    }
}
