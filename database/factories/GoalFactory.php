<?php

namespace Database\Factories;

use App\Containers\LegacySection\App\Models\Goal;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalFactory extends Factory
{
    protected $model = Goal::class;

    public function definition()
    {
        return [
            'name' => fake()->word,
            'description' => fake()->text,
            'active' => fake()->boolean(80),
            'created_at' => $date = fake()->dateTimeBetween('-120 days'),
            'updated_at' => $date,
        ];
    }
}
