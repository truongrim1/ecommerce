<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MediaFactory extends Factory
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
            'desc'=>$this->faker->catchPhrase(),
            'priority'=>$this->faker->randomDigit(),
            'product_id'=>1,
        ];
    }
}

