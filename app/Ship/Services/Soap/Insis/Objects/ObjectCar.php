<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * Integer objectID – идентификатор объекта;
 * Integer objectType – тип объекта;
 * String regNumber – номер регистрации ТС;
 * Integer carType – тип ТС (справочник CAR_TYPE);
 * String model – модель (справочник CARSMODEL);
 * String make – марка (справочник CARSMARK);
 * String chassis – номер кузова;
 * String engine – номер двигателя;
 * String docNumber – номер тех. паспорта;
 * Integer editionDate – год выпуска;
 */
class ObjectCar extends Data
{
    public function __construct(
        public int|Optional $objectID,
        public int|Optional $objectType,
        public string|Optional $regNumber,
        public int|Optional $carType,
        public string|Optional $model,
        public string|Optional $make,
        public string|Optional $chassis,
        public string|Optional $engine,
        public string|Optional $docNumber,
        public int|Optional $editionDate = 1,
        public bool|Optional $doNotUseCSDB = true,
        public bool|Optional $VerificationBool = true,
    ) {
    }
}
