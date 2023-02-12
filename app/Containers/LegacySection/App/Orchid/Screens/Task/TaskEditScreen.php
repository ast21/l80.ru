<?php

namespace App\Containers\LegacySection\App\Orchid\Screens\Task;

use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Models\Task;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class TaskEditScreen extends Screen
{
    public Task $task;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Task $task): iterable
    {
        return [
            'task' => $task,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->task->exists ? 'Редактирование цели' : 'Добавление цели';
    }

    /*
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить задачу')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->task->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->task->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->task->exists),
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
                Relation::make('task.goal_id')
                    ->fromModel(Goal::class, 'name')
                    ->title('Выберите цель'),
                TextArea::make('task.name')
                    ->title("Задача")
                    ->required()
                    ->rows(5)
                    ->placeholder('Введите задачу')
                    ->value($this->task->name),
                Quill::make('task.description')
                    ->title("Описание")
                    ->value($this->task->description),
                CheckBox::make('task.active')
                    ->sendTrueOrFalse()
                    ->checked()
                    ->placeholder('Отображать на сайте')
                    ->value($this->task->active),
            ]),
        ];
    }

    public function save(Task $task, Request $request)
    {
        $request->validate([
            'task' => ['required', 'array'],
            'task.goal_id' => ['required', 'exists:goals,id'],
            'task.name' => ['required', 'string', 'max:1000'],
            'task.description' => ['nullable', 'string', 'max:10000'],
            'task.active' => ['required', 'boolean'],
        ]);


        $task->fill($request->get('task'))->save();

        Alert::info('Вы успешно добавили задачу.');

        return redirect()->route('platform.tasks.list');
    }

    public function remove(Task $task)
    {
        $task->delete();

        Alert::info('Вы успешно удалили задачу.');

        return redirect()->route('platform.tasks.list');
    }
}
