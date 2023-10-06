<?php

namespace App\Containers\Achievement\Database\Factories;

use App\Containers\Achievement\Models\Achievement;
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
