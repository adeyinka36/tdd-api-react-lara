<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Friendship>
 */
class FriendshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           "status" => ['C', 'V', 'I'][rand(0,2)],
           "requester_id" =>fake()->numberBetween(1,10),
           "requestee_id" =>fake()->numberBetween(1,10),
        ];
    }
}
