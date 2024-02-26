<?php

namespace Database\Factories\Authors;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
