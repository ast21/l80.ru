<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * String blankPrefix – преффикс бланка;
 * String blankNumber – номер бланка;
 * String blankType – тип бланка;
 * Long blankOwnerID – идентификатор владельца бланка;
 * Integer isAction – акционный бланк (1 – да, 0 - нет);
 */
class PolicyBlanks extends Data
{
    public function __construct(
        public string|Optional $blankPrefix = '',
        public string|Optional $blankNumber = '',
        public string|Optional $blankType = '',
        public int|Optional $blankOwnerID = 0,
        public int|Optional $isAction = 0
    ) {
    }
}
