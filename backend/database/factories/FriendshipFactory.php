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
           "status" => ['P', 'R', 'A'][rand(0,2)],
           "from_id" =>fake()->numberBetween(1,10),
           "to_id" =>fake()->numberBetween(1,10),
        ];
    }
}
