<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ObjectProperty extends Data
{
    public const PROPERTY_KIND = '12';
    public const PROPERTY_TYPE = '1125';

    public function __construct(
        public string|Optional $objectType,
        public int|Optional $objectID,
        public string|Optional $ObjectState,
        public string|Optional $propertyKind,
        public string|Optional $propertyType,
        public int|Optional $ownerID,
        public Address|Optional $address,
        public array|Optional $variableParams = [],
    ) {
    }
}
