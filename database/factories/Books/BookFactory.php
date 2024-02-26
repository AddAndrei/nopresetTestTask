<?php

namespace Database\Factories\Books;

use App\Models\Authors\Author;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'author_id' => Author::inRandomOrder()->first()->id,
        ];
    }
}
