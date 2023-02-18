<?php

namespace Database\Factories;

use App\Containers\LegacySection\App\Models\Action;
use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    protected $model = Action::class;

    public function definition()
    {
        return [
            'goal_id' => Goal::factory(),
            'task_id' => Task::factory(),
            'description' => fake()->text,
            'created_at' => $date = fake()->dateTimeBetween('-30 days'),
            'updated_at' => $date,
        ];
    }
}
