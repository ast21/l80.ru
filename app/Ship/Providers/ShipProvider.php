<?php

namespace App\Ship\Providers;

use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;

class ShipProvider extends AbstractMainServiceProvider
{
    public array $serviceProviders = [
        AuthServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
    ];
}
