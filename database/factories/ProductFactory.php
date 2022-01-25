<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'price'=>$this->faker->buildingNumber(),
            'view'=>$this->faker->buildingNumber(),
            'discount'=>$this->faker->randomDigit(),
            'brand_id'=>1,
            'category_id'=>1,
            'slug'=>$this->faker->slug(),
        ];
    }
}
