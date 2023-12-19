<?php

declare(strict_types=1);

namespace App\Containers\Skill\Enum;

enum SkillStatus: string
{
    case Processing = 'processing';
    case SomeDay = 'someday';
    case Done = 'done';

    public static function values(): array
    {
        return array_column(SkillStatus::cases(), 'value');
    }

    public static function names(): array
    {
        return array_column(SkillStatus::cases(), 'name');
    }

    public static function toArray(): array
    {
        return array_combine(SkillStatus::values(), SkillStatus::names());
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
