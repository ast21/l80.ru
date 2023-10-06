<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * String aditionalID - идентификатор доп. данных;
 * String addinolaName - наименование доп. данных;
 * Double additionalAmnt - стоимость при добавлении доп. данных;
 */
class AditionalAction extends Data
{
    public function __construct(
        public Optional|string $aditionalID,
        public Optional|string $addinolaName,
        public Optional|float $additionalAmnt,
    ) {
    }
}
