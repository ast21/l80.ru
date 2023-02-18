<?php

namespace Database\Factories;

use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'goal_id' => Goal::factory(),
            'name' => fake()->word,
            'description' => fake()->text,
            'active' => fake()->boolean(80),
            'created_at' => $date = fake()->dateTimeBetween('-30 days'),
            'updated_at' => $date,
        ];
    }
}
