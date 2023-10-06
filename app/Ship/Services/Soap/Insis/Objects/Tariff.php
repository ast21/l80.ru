<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * String tariffTypeID – тип тарифа (справочник TARIFFTYPES);
 * Double tariffValue – значение тарифа;
 * Double agentCommission – агентская комиссия;
 */
class Tariff extends Data
{
    public function __construct(
        public string|Optional $tariffTypeID = '',
        public float|Optional $tariffValue = 0.0,
        public float|Optional $agentCommission = 0.0
    ) {
    }
}
