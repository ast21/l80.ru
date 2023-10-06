<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * String ParamKey – уникальный ключ;
 * String ParamValue - значение;
 */
class ObjectParam extends Data
{
    public function __construct(
        public string|Optional $ParamKey,
        public string|Optional $ParamValue,
    ) {
    }
}
