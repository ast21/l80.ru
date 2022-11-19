<?php

namespace Modules\GiftFinder\Orchid\Screens;

use Modules\GiftFinder\Models\Gift;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class GiftListScreen extends Screen
{
    private string $name = 'подарок';
    private string $routeEdit = 'platform.gf.gifts.edit';
    private string $routeCreate = 'platform.gf.gifts.create';

    public function query(): iterable
    {
        return [
            'items' => Gift::orderByDesc('id')->paginate(),
        ];
    }

    public function name(): ?string
    {
        return __('Gifts');
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
                TD::make("id", '#')->alignCenter()->width(50)->render(function (Gift $item) {
                    return Link::make($item->id)->route($this->routeEdit, $item->id);
                }),
                TD::make('name', 'Название')->render(fn(Gift $item) => $item->name),
                TD::make('gender', 'Пол')->alignCenter()->width(100)
                    ->render(fn(Gift $item) => $item->gender),
                TD::make('age_start', 'От')->alignCenter()->width(100)
                    ->render(fn(Gift $item) => $item->age_start),
                TD::make('age_end', 'До')->alignCenter()->width(100)
                    ->render(fn(Gift $item) => $item->age_end),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function (Gift $item) {
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

    public function remove(Gift $item): void
    {
        $item->delete();
        Alert::info("Вы успешно удалили $this->name.");
    }
}
