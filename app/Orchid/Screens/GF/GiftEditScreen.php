<?php

namespace App\Orchid\Screens\GF;

use App\Enums\Gender;
use App\Models\GF\Gift;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class GiftEditScreen extends Screen
{
    public Gift $gift;

    public function query(Gift $gift): iterable
    {
        return [
            'gift' => $gift,
        ];
    }

    public function name(): ?string
    {
        return $this->gift->exists ? 'Редактирование подарка' : 'Добавление подарка';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить подарок')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->gift->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->gift->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->gift->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title("Название")
                    ->required()
                    ->placeholder('Название подарка')
                    ->value($this->gift->name),
                Select::make('gender')
                    ->options(Gender::toArray())
                    ->title('Пол')
                    ->value($this->gift->gender)
                    ->help('Выберите пол, для кого подойдет этот подарок'),
                Input::make('age_start')
                    ->title("Возраст от")
                    ->required()
                    ->value($this->gift->age_start)
                    ->type('number')
                    ->help('Введите возраст, начиная с какого будет подходить подарок'),
                Input::make('age_end')
                    ->title("Возраст от")
                    ->required()
                    ->value($this->gift->age_end)
                    ->type('number')
                    ->help('Введите возраст, до которого будет подходить подарок'),
            ])
        ];
    }

    public function save(Gift $gift, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', new Enum(Gender::class)],
            'age_start' => ['required', 'numeric', 'min:0', 'max:100'],
            'age_end' => ['required', 'numeric', 'min:0', 'max:100'],
        ]);

        $gift->fill($validatedData)->save();

        Alert::info('Вы успешно добавили подарок.');

        return redirect()->route('platform.gf.gifts.list');
    }

    public function remove(Gift $gift)
    {
        $gift->delete();

        Alert::info('Вы успешно удалили подарок.');

        return redirect()->route('platform.gf.gifts.list');
    }
}
