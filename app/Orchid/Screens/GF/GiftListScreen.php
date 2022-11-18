<?php

namespace App\Orchid\Screens\GF;

use App\Models\GF\Gift;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class GiftListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'gifts' => Gift::orderByDesc('id')->paginate(),
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
                ->route('platform.gf.gifts.create'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('gifts', [
                TD::make("id", '#')->alignCenter()->width(50)->render(function (Gift $gift) {
                    return Link::make($gift->id)->route('platform.gf.gifts.edit', $gift->id);
                }),
                TD::make('name', 'Название')->render(fn(Gift $gift) => $gift->name),
                TD::make('gender', 'Пол')->alignCenter()->width(100)
                    ->render(fn(Gift $gift) => $gift->gender),
                TD::make('age_start', 'От')->alignCenter()->width(100)
                    ->render(fn(Gift $gift) => $gift->age_start),
                TD::make('age_end', 'До')->alignCenter()->width(100)
                    ->render(fn(Gift $gift) => $gift->age_end),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function (Gift $gift) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make(__('Edit'))
                                    ->route('platform.gf.gifts.edit', $gift->id)
                                    ->icon('pencil'),
                                Button::make(__('Delete'))
                                    ->method('remove')
                                    ->icon('trash')
                                    ->confirm(__('Вы уверены, что хотите удалить подарок?'))
                                    ->parameters(['id' => $gift->id]),
                            ]);
                    }),
            ]),
        ];
    }
}
