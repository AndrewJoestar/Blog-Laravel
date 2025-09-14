<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            //
            'genre_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->words(3, true),
            'author' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'body' => $this->faker->paragraphs(3, true),
        ];
    }
}
