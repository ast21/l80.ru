<?php

namespace App\Orchid\Screens\GF;

use App\Models\GF\Hobby;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class HobbyEditScreen extends Screen
{
    public Hobby $item;
    private string $routeList = 'platform.gf.hobbies.list';
    private string $name = 'хобби';

    public function query(Hobby $item): iterable
    {
        return [
            'item' => $item,
        ];
    }

    public function name(): ?string
    {
        return $this->item->exists ? "Редактировать $this->name" : "Добавить $this->name";
    }

    public function commandBar(): iterable
    {
        return [
            Button::make("Добавить $this->name")
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->item->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->item->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->item->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title('Название')
                    ->required()
                    ->placeholder($this->name)
                    ->value($this->item->name),
            ])
        ];
    }

    public function save(Hobby $item, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $item->fill($validatedData)->save();

        Alert::info("Вы успешно добавили $this->name.");

        return redirect()->route($this->routeList);
    }

    public function remove(Hobby $item)
    {
        $item->delete();

        Alert::info("Вы успешно удалили $this->name.");

        return redirect()->route($this->routeList);
    }
}