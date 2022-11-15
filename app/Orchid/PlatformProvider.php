<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param  Dashboard  $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);
        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make(__('Gifts'))
                ->icon('gift')
                ->route('platform.gf.gifts.list')
                ->title('Gift Finder'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),

            Menu::make(__('PHP Interpreter'))
                ->icon('code')
                ->route('platform.interpreter'),

            Menu::make(__('Choices'))
                ->icon('layers')
                ->route('platform.choices.list'),

            Menu::make(__('Quotes'))
                ->icon('quote')
                ->route('platform.quotes.list'),

            Menu::make(__('FAQ'))
                ->icon('question')
                ->route('platform.faqs.list'),

            Menu::make(__('Goals'))
                ->icon('target')
                ->route('platform.goals.list'),

            Menu::make(__('Tasks'))
                ->icon('check')
                ->route('platform.tasks.list'),

            Menu::make(__('Actions'))
                ->icon('graph')
                ->route('platform.actions.list'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make('Profile')
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
