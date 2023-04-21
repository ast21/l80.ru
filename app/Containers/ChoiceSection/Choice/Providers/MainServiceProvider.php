<?php

declare(strict_types=1);

namespace App\Containers\ChoiceSection\Choice\Providers;

class MainServiceProvider extends \AdminKit\Porto\Abstracts\Providers\MainServiceProvider
{
    public array $serviceProviders = [
        PlatformServiceProvider::class,
    ];

    public function register(): void
    {
        parent::register();
    }
}
