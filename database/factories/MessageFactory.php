<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => fake()->sentence(),
            'published_at' => fake()->dateTimeBetween('-2 weeks', 'now'),
            'user_id' => fake()->numberBetween(1,10),
            'chat_id' => fake()->numberBetween(1,25),
        ];
    }
}
