<?php

namespace App\Containers\TestLanding\Providers;

use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;

class MainServiceProvider extends AbstractMainServiceProvider
{
    protected array $serviceProviders = [
        RouteServiceProvider::class,
    ];
}
