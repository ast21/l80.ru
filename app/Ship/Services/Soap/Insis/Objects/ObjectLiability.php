<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class ObjectLiability extends Data
{
    public function __construct(
        public string|Optional $objectType,
        public int|Optional $objectID = 0,
        public string|Optional $ObjectState = '0',
        public int|Optional $liabilityType = 1,
    ) {
    }
}
