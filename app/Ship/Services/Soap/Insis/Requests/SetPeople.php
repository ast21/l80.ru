<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\People;
use Spatie\LaravelData\Data;

class SetPeople extends Data implements InsisRequestInterface
{
    public function __construct(
        public People $aPeople,
    ) {

    }
}
