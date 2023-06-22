<?php

namespace App\Containers\PSG\Providers;

use App\Containers\PSG\UI\WEB\Livewire\PSG;
use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;
use Livewire\Livewire;

class MainServiceProvider extends AbstractMainServiceProvider
{
    public array $serviceProviders = [
        RouteServiceProvider::class,
    ];

    public function boot(): void
    {
        Livewire::component('psg', PSG::class);

        parent::boot();
    }
}
