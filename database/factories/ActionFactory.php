<?php

namespace Database\Factories;

use App\Models\Goal;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-30 days');
        $task = Task::select(['id', 'goal_id'])->inRandomOrder()->first();

        return [
            'goal_id' => $task->goal_id,
            'task_id' => $task->id,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
