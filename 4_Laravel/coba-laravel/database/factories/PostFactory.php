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
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),
            'title' => fake()->sentence(mt_rand(2,8)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->sentence(mt_rand(20,30)),
            'body' => fake()->paragraph(mt_rand(3,6))
        ];
    }
}
