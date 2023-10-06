<?php

namespace App\Containers\Achievements\Database\Factories;

use App\Containers\Achievements\Models\Achievement;
use App\Ship\Abstracts\Factories\AbstractFactory;

class AchievementFactory extends AbstractFactory
{
    protected $model = Achievement::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
