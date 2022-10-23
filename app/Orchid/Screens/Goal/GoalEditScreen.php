<?php

namespace App\Orchid\Screens\Goal;

use App\Models\Goal;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class GoalEditScreen extends Screen
{
    public Goal $goal;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Goal $goal): iterable
    {
        return [
            'goal' => $goal,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->goal->exists ? 'Редактирование цели' : 'Добавление цели';
    }

    /*
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить цель')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->goal->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->goal->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->goal->exists),
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
                TextArea::make('goal.name')
                    ->title("Цель")
                    ->required()
                    ->rows(5)
                    ->placeholder('Введите Цель')
                    ->value($this->goal->name),
                Quill::make('goal.description')
                    ->title("Описание")
                    ->value($this->goal->description),
                CheckBox::make('goal.active')
                    ->sendTrueOrFalse()
                    ->checked()
                    ->placeholder('Отображать на сайте')
                    ->value($this->goal->active),
            ]),
        ];
    }

    public function save(Goal $goal, Request $request)
    {
        $request->validate([
            'goal' => ['required', 'array'],
            'goal.name' => ['required', 'string', 'max:1000'],
            'goal.description' => ['nullable', 'string', 'max:10000'],
            'goal.active' => ['required', 'boolean'],
        ]);

        $goal->fill($request->get('goal'))->save();

        Alert::info('Вы успешно добавили цель.');

        return redirect()->route('platform.goals.list');
    }

    public function remove(Goal $goal)
    {
        $goal->delete();

        Alert::info('Вы успешно удалили цель.');

        return redirect()->route('platform.goals.list');
    }
}
