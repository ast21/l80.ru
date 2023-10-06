<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * Integer objectType – тип объекта (справочник OBJECTTYPES);
 * Long objectID – идентификатор объекта;
 * Integer ObjectState – статус объекта;
 * List<ObjectParam> variableParams – переменные данные по объекту;
 * List<ObjectCover> objectCovers – покрытия по объекту;
 */
class PolicyObject extends Data
{
    public function __construct(
        public int|Optional $objectType,
        public int|Optional $objectID,
        public int|Optional $ObjectState,
        #[DataCollectionOf(ObjectParam::class)]
        public DataCollection|Optional $variableParams,
        #[DataCollectionOf(ObjectCover::class)]
        public DataCollection|Optional $objectCovers
    ) {
    }
}
