<?php

namespace App\Orchid\Layouts;

use App\Models\Task;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TaskListLayout extends Table
{
    protected $target = 'tasks';

    protected function columns(): iterable
    {
        return [
            TD::make("id", '#')->alignCenter()->width(50)->render(function (Task $task) {
                return Link::make($task->id)->route('platform.tasks.edit', $task->id);
            }),
            TD::make('name', 'Название')->render(fn(Task $task) => $task->name),
            TD::make('goal_id', 'Цель')->render(fn(Task $task) => $task->goal->name),
            TD::make('active', 'Активен')->alignCenter()->width(100)->bool(),
            TD::make('edit', 'Действия')
                ->alignRight()
                ->width(100)
                ->render(function (Task $task) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->route('platform.tasks.edit', $task->id)
                                ->icon('pencil'),
                            Button::make(__('Delete'))
                                ->method('remove')
                                ->icon('trash')
                                ->confirm(__('Вы уверены, что хотите удалить цель?'))
                                ->parameters(['id' => $task->id]),
                        ]);
                }),
        ];
    }
}
