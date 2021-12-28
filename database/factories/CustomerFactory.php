<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName'=>$this->faker->catchPhrase(),
            'email'=>$this->faker->freeEmail(),
            'pass'=>$this->faker->postcode(),
            'address'=>$this->faker->streetName(),
            'phone'=>$this->faker->postcode(),
        ];
    }
}
