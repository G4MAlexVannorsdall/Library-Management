<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the Book model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title,
            'author' => fake()->name,
            'genre' => fake(),
            'number of pages' => fake()->randomDigitNotNull,
            'year published' => fake()->year(),
        ];
    }
}
