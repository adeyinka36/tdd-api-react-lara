<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'commenter_id'=>fake()->numberBetween(1,10),
            'commentee_id'=>fake()->numberBetween(1,10),
            'commented_on'=>$postType = ['C', 'V', 'I'][rand(0,2)]
        ];
    }
}
