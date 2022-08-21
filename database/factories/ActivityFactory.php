<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JournalActivity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'activity' => $this->faker->text(20),
            'description' => $this->faker->sentence,
            'start_time' => $this->faker->time('H:i'),
            'end_time' => $this->faker->time('H:i'),
            'status' => $this->faker->randomElement(['approved', 'pending', 'revision', 'rejected']),
            'user_id' => $this->faker->numberBetween(1, 3),
            'division' => 'Divisi IT - ' . $this->faker->numberBetween(1, 3),
            'is_review' => $this->faker->boolean,
        ];
    }
}
