<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => Str::ucfirst(fake()->words(4, true)),
            'description' => fake()->text(3000),
            'preview' => fake()->text(50),
            'thumbnail' => fake()->imageUrl(600, 600, null, false),
        ];
    }
}
