<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use Spatie\LaravelData\Data;

class GetDictionary extends Data implements InsisRequestInterface
{
    public function __construct(
        public string $aDicName,
    ) {
    }
}
