<?php

declare(strict_types=1);

namespace App\Containers\Project\Enum;

enum ProjectStatus: string
{
    case Processing = 'processing';
    case SomeDay = 'someday';
    case Done = 'done';

    public static function values(): array
    {
        return array_column(ProjectStatus::cases(), 'value');
    }

    public static function names(): array
    {
        return array_column(ProjectStatus::cases(), 'name');
    }

    public static function toArray(): array
    {
        return array_combine(ProjectStatus::values(), ProjectStatus::names());
    }

    public function color(): string
    {
        return match ($this->value) {
            'someday' => 'gray',
            'processing' => 'info',
            'done' => 'success',
        };
    }
}