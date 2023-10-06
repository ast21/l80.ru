<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

/**
 * String riskType – тип риска (справочник RISKTYPES);
 * String franchiseID – идентификатор франшизы (справочник FRANCHISETYPES);
 * String franchiseType – тип франшизы;
 * Double franchiseValue – значение франшизы;
 * Double franchiseMinValue – максимальное значение франшизы;
 * Double franchiseMaxValue – минимальное значение франшизы;
 */
class CoverRisk extends Data
{
    public function __construct(
        public string|Optional $riskType = '',
        public string|Optional $franchiseID = '',
        public string|Optional $franchiseType = '',
        public float|Optional $franchiseValue = 0.0,
        public float|Optional $franchiseMinValue = 0.0,
        public float|Optional $franchiseMaxValue = 0.0
    ) {
    }
}
