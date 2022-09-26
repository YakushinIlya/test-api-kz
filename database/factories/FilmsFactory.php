<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Films>
 */
class FilmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'head' => fake()->unique()->sentence,
            'poster' => fake()->image(storage_path().'/poster', 300, 400, null, false)??null,
        ];
    }
}
