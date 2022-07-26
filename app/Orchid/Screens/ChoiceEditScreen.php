<?php

namespace App\Orchid\Screens;

use App\Models\Choice;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ChoiceEditScreen extends Screen
{
    public Choice $choice;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Choice $choice): iterable
    {
        return [
            'choice' => $choice,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->choice->exists ? 'Добавить выбор' : 'Редактировать выбор';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить выбор')
                ->icon('plus')
                ->method('createOrUpdate')
                ->canSee(!$this->choice->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->choice->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->choice->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make("choice.name")
                    ->title("Название")
                    ->placeholder('Введите навзание')
                    ->value($this->choice->name),
            ]),
        ];
    }

    public function createOrUpdate(Choice $choice, Request $request)
    {
        $request->validate([
            'choice' => ['required', 'array'],
            'choice.name' => ['required', 'string', 'max:255'],
        ]);

        $choice->fill($request->get('choice'))->save();

        Alert::info('Вы успешно добавили выбор.');

        return redirect()->route('platform.choices.list');
    }

    public function remove(Choice $choice)
    {
        $choice->delete();

        Alert::info('Вы успешно удалили выбор.');

        return redirect()->route('platform.choices.list');
    }
}