<?php

namespace Database\Factories;

use App\Models\Category;
use App\Enums\PriceTypeEnum;
use App\Models\Cities;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' =>$this->faker->paragraph(),
            'title' => $this->faker->sentence(),
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'city_id' => Cities::query()->inRandomOrder()->first()->id,
            'price' => $this->faker->randomFloat(),
            'price_type' => PriceTypeEnum::ForSale,
        ];
    }
}
