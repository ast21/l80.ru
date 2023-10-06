<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\Distribution;
use Spatie\LaravelData\Data;

class UseDistribution extends Data implements InsisRequestInterface
{
    public function __construct(
        public Distribution $aDistribution,
    ) {
    }
}
