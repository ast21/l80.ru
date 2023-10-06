<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\ObjectLiability;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class SetObjectLiability extends Data implements InsisRequestInterface
{
    public function __construct(
        public ObjectLiability $aObjectLiab,
        public string|Optional $aInsrType,
    ) {

    }
}
