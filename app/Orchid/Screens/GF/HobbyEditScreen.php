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
    public Hobby $hobby;

    public function query(Hobby $hobby): iterable
    {
        return [
            'hobby' => $hobby,
        ];
    }

    public function name(): ?string
    {
        return $this->hobby->exists ? 'Редактирование хобби' : 'Добавление хобби';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить хобби')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->hobby->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->hobby->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->hobby->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title("Название")
                    ->required()
                    ->placeholder('Название хобби')
                    ->value($this->hobby->name),
            ])
        ];
    }

    public function save(Hobby $hobby, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $hobby->fill($validatedData)->save();

        Alert::info('Вы успешно добавили хобби.');

        return redirect()->route('platform.gf.hobbies.list');
    }

    public function remove(Hobby $hobby)
    {
        $hobby->delete();

        Alert::info('Вы успешно удалили хобби.');

        return redirect()->route('platform.gf.hobbies.list');
    }
}
