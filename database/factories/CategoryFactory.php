<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition() : array
    {
        return [
            'activity' => $this->faker->boolean(),
            'name' => $this->faker->firstName(),
            'code' => $this->faker->ean8(),
            'parent_category' => $this->faker->name()
        ];
    }
}