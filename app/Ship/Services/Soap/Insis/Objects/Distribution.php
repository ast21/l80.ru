<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;

/**
 * Integer type – тип рассылки (1 – SMS, 2 - EMAIL);
 * String name - наименование рассылки (справочник DISTRIBUTIONS);
 * String text – текст рассылки;
 * String destination - получатель;
 */
class Distribution extends Data
{
    public const SMS = 1;
    public const EMAIL = 2;

    public function __construct(
        public int $type,
        public string $name,
        public string $text,
        public string $destination,
    ) {

    }
}
