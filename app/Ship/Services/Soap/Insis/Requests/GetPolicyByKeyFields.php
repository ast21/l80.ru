<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\Policy;
use Spatie\LaravelData\Data;

class GetPolicyByKeyFields extends Data implements InsisRequestInterface
{
    public function __construct(
        public Policy $aPolicy,
        public int $sortParam = 1,
    ) {
    }
}
