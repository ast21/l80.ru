<?php

declare(strict_types=1);

namespace App\Containers\ChoiceSection\Choice\UI\Platform\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChoiceSaveRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'elements' => ['nullable', 'array'],
            'elements.*.title' => ['required', 'string', 'max:255'],
        ];
    }
}
