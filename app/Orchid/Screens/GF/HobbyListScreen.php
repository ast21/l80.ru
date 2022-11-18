<?php

namespace App\Orchid\Screens\GF;

use App\Models\GF\Hobby;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class HobbyListScreen extends Screen
{
    private string $name = 'хобби';
    private string $routeEdit = 'platform.gf.hobbies.edit';
    private string $routeCreate = 'platform.gf.hobbies.create';

    public function query(): iterable
    {
        return [
            'items' => Hobby::orderByDesc('id')->paginate(),
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
                ->route($this->routeCreate),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('items', [
                TD::make("id", '#')->alignCenter()->width(50)->render(function (Hobby $item) {
                    return Link::make($item->id)->route($this->routeEdit, $item->id);
                }),
                TD::make('name', 'Название')->render(fn(Hobby $item) => $item->name),
                TD::make('edit', 'Действия')
                    ->alignRight()
                    ->width(100)
                    ->render(function (Hobby $item) {
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

    public function remove(Hobby $item): void
    {
        $item->delete();
        Alert::info("Вы успешно удалили $this->name.");
    }
}
