<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use App\Ship\Services\Soap\Insis\Objects\ObjectProperty;
use Spatie\LaravelData\Data;

class SetObjectProperty extends Data implements InsisRequestInterface
{
    public function __construct(
        public ObjectProperty $aObjectProperty,
    ) {

    }
}
