<?php

namespace App\Orchid\Screens\GF;

use App\Models\GF\Product;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ProductListScreen extends Screen
{
    private string $name = 'продукт';
    private string $routeEdit = 'platform.gf.products.edit';
    private string $routeCreate = 'platform.gf.products.create';

    public function query(): iterable
    {
        return [
            'items' => Product::orderByDesc('id')->paginate(),
        ];
    }

    public function name(): ?string
    {
        return __('Products');
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
                TD::make("id", '#')
                    ->alignCenter()
                    ->width(50)
                    ->render(fn($item) => Link::make($item->id)->route($this->routeEdit, $item->id)),
                TD::make('name', 'Название')->render(fn($item) => $item->name),
                TD::make('price', 'Стоимость')
                    ->alignCenter()
                    ->width(100)
                    ->render(fn($item) => $item->price),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function ($item) {
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

    public function remove($item): void
    {
        $item->delete();
        Alert::info("Вы успешно удалили $this->name.");
    }
}
