<?php

declare(strict_types=1);

namespace App\Containers\LegacySection\App\Providers;

use App\Ship\Parents\Providers\PlatformServiceProvider as ParentPlatformProvider;

class PlatformServiceProvider extends ParentPlatformProvider
{
    public function registerMainMenu(): array
    {
        return [
            //
        ];
    }

    public function registerPermissions(): array
    {
        return [
            //
        ];
    }
}
