<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $postType = ['C', 'V', 'I'][rand(0,2)];
        return [
            "liker" => fake()->numberBetween(1, 10),
            "likee" => fake()->numberBetween(1, 10),
            "liked_item" => $postType,
        ];
    }
}
