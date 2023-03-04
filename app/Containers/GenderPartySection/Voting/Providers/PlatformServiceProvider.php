<?php

declare(strict_types=1);

namespace App\Containers\GenderPartySection\Voting\Providers;

use App\Containers\GenderPartySection\Voting\Models\Vote;
use App\Ship\Parents\Providers\ParentPlatformServiceProvider;
use Orchid\Platform\ItemPermission;
use Orchid\Screen\Actions\Menu;

class PlatformServiceProvider extends ParentPlatformServiceProvider
{
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__(Vote::NAME_PLURAL))
                ->title(__('Gender Party'))
                ->icon(Vote::ICON)
                ->route(Vote::ROUTE_LIST)
                ->permission(Vote::PERMISSION),
        ];
    }

    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('Gender Party'))
                ->addPermission(Vote::PERMISSION, __('Votes')),
        ];
    }
}
