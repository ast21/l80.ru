<?php

declare(strict_types=1);

namespace App\Containers\ChoiceSection\Choice\Data\Factories;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoiceFactory extends Factory
{
    protected $model = Choice::class;

    public function definition()
    {
        return [
            'title' => fake()->realText(30),
        ];
    }
}
