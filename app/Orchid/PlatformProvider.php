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
     * @param Dashboard $dashboard
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
            // Access rights
            Menu::make(__('Users'))
                ->title(__('Access rights'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users'),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),

            // Gift Finder
            Menu::make(__('Gifts'))
                ->title('Gift Finder')
                ->icon('gift')
                ->route('platform.gf.gifts.list')
                ->permission('platform.gf'),

            Menu::make(__('Hobbies'))
                ->icon('hobby')
                ->route('platform.gf.hobbies.list')
                ->permission('platform.gf'),

            Menu::make(__('Shops'))
                ->icon('shops')
                ->route('platform.gf.shops.list')
                ->permission('platform.gf'),

            Menu::make(__('Products'))
                ->icon('products')
                ->route('platform.gf.products.list')
                ->permission('platform.gf'),

            // l80
            Menu::make(__('Choices'))
                ->title('l80')
                ->icon('layers')
                ->route('platform.choices.list')
                ->permission('platform.l80'),

            Menu::make(__('Quotes'))
                ->icon('quote')
                ->route('platform.quotes.list')
                ->permission('platform.l80'),

            Menu::make(__('FAQ'))
                ->icon('question')
                ->route('platform.faqs.list')
                ->permission('platform.l80'),

            Menu::make(__('Goals'))
                ->icon('target')
                ->route('platform.goals.list')
                ->permission('platform.l80'),

            Menu::make(__('Tasks'))
                ->icon('check')
                ->route('platform.tasks.list')
                ->permission('platform.l80'),

            Menu::make(__('Actions'))
                ->icon('graph')
                ->route('platform.actions.list')
                ->permission('platform.l80'),

            // Tools
            Menu::make(__('PHP Interpreter'))
                ->title('Tools')
                ->icon('code')
                ->route('platform.interpreter')
                ->permission('platform.tools'),
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

            ItemPermission::group(__('L80'))
                ->addPermission('platform.l80', __('L80')),

            ItemPermission::group(__('Tools'))
                ->addPermission('platform.tools', __('Tools')),
        ];
    }
}
