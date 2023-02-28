<?php

declare(strict_types=1);

namespace App\Ship\Parents\Providers;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

abstract class PlatformServiceProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            //
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            //
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            //
        ];
    }

    /**
     * @return array
     */
    public function registerMenuFromPackages(): array
    {
        $menus = [
            Menu::make()->title(__('Modules')),
        ];

        foreach (config('admin-kit.packages') as $package) {
            $instance = $package['instance'] ?? null;
            if (isset($instance)
                && defined("$instance::NAME")
                && defined("$instance::ICON")
                && defined("$instance::ROUTE_LIST")
            ) {
                $menus[] = Menu::make(__($instance::NAME))
                    ->icon($instance::ICON)
                    ->route($instance::ROUTE_LIST);
            }
        }

        return $menus;
    }
}
