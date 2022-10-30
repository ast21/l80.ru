<?php

namespace App\Orchid\Layouts;

use App\Models\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ActionListLayout extends Table
{
    protected $target = 'actions';

    protected function columns(): iterable
    {
        return [
            TD::make("id", '#')->alignCenter()->width(50)->render(function (Action $action) {
                return Link::make($action->id)->route('platform.actions.edit', $action->id);
            }),
            TD::make('goal_id', 'Цель')->width(300)->render(fn(Action $action) => $action->goal->name),
            TD::make('task_id', 'Задача')->width(300)->render(fn(Action $action) => $action->task->name),
            TD::make('edit', 'Действия')
                ->alignRight()
                ->width(100)
                ->render(function (Action $action) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->route('platform.actions.edit', $action->id)
                                ->icon('pencil'),
                            Button::make(__('Delete'))
                                ->method('remove')
                                ->icon('trash')
                                ->confirm(__('Вы уверены, что хотите удалить цель?'))
                                ->parameters(['id' => $action->id]),
                        ]);
                }),
        ];
    }
}
