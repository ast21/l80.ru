<?php

namespace Modules\GiftFinder\Orchid\Screens;

use Modules\GiftFinder\Models\Shop;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ShopListScreen extends Screen
{
    private string $name = 'магазин';
    private string $routeEdit = 'platform.gf.shops.edit';
    private string $routeCreate = 'platform.gf.shops.create';

    public function query(): iterable
    {
        return [
            'items' => Shop::orderByDesc('id')->paginate(),
        ];
    }

    public function name(): ?string
    {
        return __('Shops');
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->route($this->routeCreate),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('items', [
                TD::make("id", '#')->alignCenter()->width(50)->render(function (Shop $item) {
                    return Link::make($item->id)->route($this->routeEdit, $item->id);
                }),
                TD::make('name', 'Название')->render(fn(Shop $item) => $item->name),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function (Shop $item) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make(__('Edit'))
                                    ->route($this->routeEdit, $item->id)
                                    ->icon('pencil'),
                                Button::make(__('Delete'))
                                    ->method('remove')
                                    ->icon('trash')
                                    ->confirm(__('Вы уверены, что хотите удалить?'))
                                    ->parameters(['id' => $item->id]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Shop $item): void
    {
        $item->delete();
        Alert::info("Вы успешно удалили $this->name.");
    }
}
