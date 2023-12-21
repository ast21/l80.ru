<?php

declare(strict_types=1);

namespace App\Containers\Module\Providers;

use App\Containers\Module\Enum\Domain;
use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;

class MainServiceProvider extends AbstractMainServiceProvider
{
    public function boot(): void
    {
        Domain::tryFrom(request()->getHttpHost())?->setUrlConfig();
        parent::boot();
    }
}
