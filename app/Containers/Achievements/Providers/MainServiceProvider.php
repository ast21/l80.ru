<?php

namespace App\Containers\Achievement\Providers;

use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;

class MainServiceProvider extends AbstractMainServiceProvider
{
    protected array $serviceProviders = [
        RouteServiceProvider::class,
        FilamentServiceProvider::class,
    ];
}
