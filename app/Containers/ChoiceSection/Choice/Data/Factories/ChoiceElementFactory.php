<?php

declare(strict_types=1);

namespace App\Containers\ChoiceSection\Choice\Data\Factories;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use App\Containers\ChoiceSection\Choice\Models\ChoiceElement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoiceElementFactory extends Factory
{
    protected $model = ChoiceElement::class;

    public function definition()
    {
        return [
            'choice_id' => Choice::factory(),
            'title' => fake()->realText(30),
        ];
    }
}
