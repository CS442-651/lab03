<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(30),
            'detail' => $this->faker->realText(100),
            'due_date' => $this->faker->dateTimeBetween('-15 days', '+15 days')
                                      ->format('Y-m-d H:i:s')
        ];
    }
}
