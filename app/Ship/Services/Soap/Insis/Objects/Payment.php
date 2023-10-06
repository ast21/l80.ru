<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * Date paymentDate – дата платежа;
 * Double paymentAmnt – сумма платежа;
 */
class Payment extends Data
{
    public function __construct(
        public string|Optional $paymentDate,
        public float|Optional $paymentAmnt,
    ) {
    }
}
