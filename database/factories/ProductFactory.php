<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private int $minPrice = 100000;
    private int $maxPrice = 999999999;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2, $this->minPrice, $this->maxPrice),
            'barcode' => fake()->regexify('^123456\d{7}$'),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
