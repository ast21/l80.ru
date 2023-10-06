<?php

namespace App\Ship\Services\Soap\Insis\Requests;

use App\Ship\Services\Soap\Insis\Contracts\InsisRequestInterface;
use Spatie\LaravelData\Data;

class GetObjectProperty extends Data implements InsisRequestInterface
{
    public function __construct(
        public string $aPolicyID,
        public int $aAnnexID = 0,
    ) {
    }
}
