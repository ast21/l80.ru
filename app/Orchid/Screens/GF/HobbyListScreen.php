<?php

namespace App\Orchid\Screens\GF;

use App\Models\GF\Hobby;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class HobbyListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'hobbies' => Hobby::orderByDesc('id')->paginate(),
        ];
    }

    public function name(): ?string
    {
        return __('Hobbies');
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->route('platform.gf.hobbies.create'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('hobbies', [
                TD::make("id", '#')->alignCenter()->width(50)->render(function (Hobby $hobby) {
                    return Link::make($hobby->id)->route('platform.gf.hobbies.edit', $hobby->id);
                }),
                TD::make('name', 'Название')->render(fn(Hobby $hobby) => $hobby->name),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function (Hobby $hobby) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make(__('Edit'))
                                    ->route('platform.gf.hobbies.edit', $hobby->id)
                                    ->icon('pencil'),
                                Button::make(__('Delete'))
                                    ->method('remove')
                                    ->icon('trash')
                                    ->confirm(__('Вы уверены, что хотите удалить хобби?'))
                                    ->parameters(['id' => $hobby->id]),
                            ]);
                    }),
            ]),
        ];
    }
}
