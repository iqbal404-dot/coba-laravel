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
            "kategori_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 5),
            "judul" => fake()->sentence(mt_rand(2, 8)),
            "slug" => fake()->slug(),
            "excerpt" => fake()->paragraph(),
            "body" => fake()->paragraph(mt_rand(5, 10))
        ];
    }
}
