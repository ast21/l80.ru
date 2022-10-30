<?php

namespace App\Orchid\Screens\Action;

use App\Models\Goal;
use App\Models\Action;
use App\Orchid\Layouts\SelectTaskListener;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ActionEditScreen extends Screen
{
    public Action $action;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Action $action): iterable
    {
        return [
            'action' => $action,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->action->exists ? 'Редактирование действия' : 'Добавление действия';
    }

    /*
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить действие')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->action->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->action->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->action->exists),
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
            SelectTaskListener::class,
        ];
    }

    public function asyncSelectGoal(Goal $goal)
    {
        return [
            'goal_id' => $goal->id,
        ];
    }

    public function save(Action $action, Request $request)
    {
        $validatedData = $request->validate([
            'goal_id' => ['required', 'exists:goals,id'],
            'task_id' => ['required', 'exists:tasks,id'],
            'description' => ['nullable', 'string', 'max:10000'],
        ]);

        $action->fill($validatedData)->save();

        Alert::info('Вы успешно добавили действие.');
        return redirect()->route('platform.actions.list');
    }

    public function remove(Action $action)
    {
        $action->delete();

        Alert::info('Вы успешно удалили действие.');
        return redirect()->route('platform.actions.list');
    }
}
