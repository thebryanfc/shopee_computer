<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{


    public function definition(): array
    {
        return [
            'name_client' => $this->faker->name(),
            'adress' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'e-mail' => $this->faker->unique()->safeEmail(),
            'last_purchase' => $this->faker->date(),
        ];
    }
}