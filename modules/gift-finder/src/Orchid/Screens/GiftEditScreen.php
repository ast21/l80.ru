<?php

namespace Modules\GiftFinder\Orchid\Screens;

use App\Enums\Gender;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use Modules\GiftFinder\Models\Gift;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class GiftEditScreen extends Screen
{
    public Gift $item;
    private string $routeList = 'platform.gf.gifts.list';
    private string $name = 'подарок';

    public function query(Gift $item): iterable
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
                Select::make('gender')
                    ->options(Gender::toArray())
                    ->title('Пол')
                    ->value($this->item->gender)
                    ->help('Выберите пол, для кого подойдет этот подарок'),
                Input::make('age_start')
                    ->title('Возраст от')
                    ->required()
                    ->value($this->item->age_start)
                    ->type('number')
                    ->help('Введите возраст, начиная с какого будет подходить подарок'),
                Input::make('age_end')
                    ->title('Возраст до')
                    ->required()
                    ->value($this->item->age_end)
                    ->type('number')
                    ->help('Введите возраст, до которого будет подходить подарок'),
            ])
        ];
    }

    public function save(Gift $item, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', new Enum(Gender::class)],
            'age_start' => ['required', 'numeric', 'min:0', 'max:100'],
            'age_end' => ['required', 'numeric', 'min:0', 'max:100'],
        ]);

        $item->fill($validatedData)->save();

        Alert::info("Вы успешно добавили $this->name.");

        return redirect()->route($this->routeList);
    }

    public function remove(Gift $item)
    {
        $item->delete();

        Alert::info("Вы успешно удалили $this->name.");

        return redirect()->route($this->routeList);
    }
}
