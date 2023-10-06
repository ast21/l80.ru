<?php

namespace App\Ship\Services\Soap\Insis;

use App\Ship\Services\Soap\Insis\Contracts\InsisResponseInterface;
use Spatie\LaravelData\Data;

class BaseResponse extends Data implements InsisResponseInterface
{
    public function __construct (
        public mixed $result,
    ) {
    }
}
