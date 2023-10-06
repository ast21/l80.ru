<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

/**
 * String coverType – тип покрытия  (справочник COVERTYPES);
 * String coverValueCurrency – валюта страховой суммы;
 * Double coverValue – страховая сумма;
 * String coverPremiumCurrency – валюта страховой премии;
 * Double coverPremium – страховая премия;
 * Double Discount - скидка;
 * Tariff tariff – объект тариф;
 * List<CoverRisk> coverRisks – массив объектов Риски;
 */
class ObjectCover extends Data
{
    public function __construct(
        public string|Optional $coverType,
        public string|Optional $coverValueCurrency,
        public float|Optional $coverValue,
        public string|Optional $coverPremiumCurrency,
        public float|Optional $coverPremium,
        public float|Optional $Discount,
        public Tariff|Optional $tariff,
        #[DataCollectionOf(CoverRisk::class)]
        public DataCollection $coverRisks
    ) {
    }
}
