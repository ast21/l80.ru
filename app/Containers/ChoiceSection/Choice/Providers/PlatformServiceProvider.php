<?php

declare(strict_types=1);

namespace App\Containers\ChoiceSection\Choice\Providers;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformServiceProvider extends OrchidServiceProvider
{
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__(Choice::NAME_PLURAL))
                ->title(__(Choice::NAME_PLURAL))
                ->icon(Choice::ICON)
                ->route(Choice::ROUTE_LIST)
                ->permission(Choice::PERMISSION_READ),
        ];
    }

    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__(Choice::NAME_PLURAL))
                ->addPermission(Choice::PERMISSION_CREATE, __('Create'))
                ->addPermission(Choice::PERMISSION_READ, __('Read'))
                ->addPermission(Choice::PERMISSION_UPDATE, __('Update'))
                ->addPermission(Choice::PERMISSION_DELETE, __('Delete')),
        ];
    }
}
