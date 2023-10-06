<?php

namespace App\Ship\Services\Soap\Insis\Objects;

use App\Containers\User\Models\Address as AddressModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class Address extends Data
{
    public function __construct(
        public string $addressType = AddressModel::ADDRESS_TYPE_HOME,
        public string $country = 'KAZ',
        public int|Optional $city = 1,
        public int|Optional $region = 1, // Dictionary\District
        public string|Optional $state = '', // Dictionary\Region
        public string|Optional $streetName = '',
        public string|Optional $blockNumber = '',
        public string|Optional $apartmentNumber = '',
    ) {
    }

    public static function fromModel(AddressModel $model): self
    {
        return new self(
            city: $model->city->key,
            region: $model->district->key,
            state: $model->region->key,
            streetName: $model->street,
            blockNumber: $model->house,
            apartmentNumber: $model->apartment ?? '',
        );
    }
}
