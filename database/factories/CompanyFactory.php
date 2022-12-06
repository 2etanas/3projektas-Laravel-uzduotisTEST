<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return 
            [
                'name' => $this->faker->company(), // sugeneruos netikra varda
                'code' => $this->faker->numberBetween(10000, 99999), // sugeneruos netikra pavarde
                'phone' => $this->faker->phoneNumber(), // sugeneruos netikra pavarde
                'address' => $this->faker->address(),
                'country' => $this->faker->country(),
                'city' => $this->faker->city(),
                'zip' => $this->faker->postcode()
        ];
    }
}
