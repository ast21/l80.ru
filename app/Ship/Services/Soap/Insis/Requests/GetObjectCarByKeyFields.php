<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\ObjectCar;
use Spatie\LaravelData\Data;

class GetObjectCarByKeyFields extends Data implements InsisRequestInterface
{
    public function __construct(
        public ObjectCar $aObjectCar,
    ) {
    }
}
