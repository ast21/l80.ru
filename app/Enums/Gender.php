<?php

namespace App\Enums;

enum Gender: string
{
    case Male = 'male';
    case Female = 'female';
    case Unisex = 'unisex';


    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toArray(): array
    {
        return array_combine(self::values(), self::names());
    }
}
