<?php

namespace App\Containers\LegacySection\App\Orchid\Layouts;

use App\Containers\LegacySection\App\Models\Goal;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class GoalListLayout extends Table
{
    protected $target = 'goals';

    protected function columns(): iterable
    {
        return [
            TD::make("id", '#')->alignCenter()->width(50)->render(function (Goal $goal) {
                return Link::make($goal->id)->route('platform.goals.edit', $goal->id);
            }),
            TD::make('name', 'Название')->render(fn(Goal $goal) => $goal->name),
            TD::make('active', 'Активен')->alignCenter()->width(100)->bool(),
            TD::make('edit', 'Действия')
                ->alignRight()
                ->width(100)
                ->render(function (Goal $goal) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->route('platform.goals.edit', $goal->id)
                                ->icon('pencil'),
                            Button::make(__('Delete'))
                                ->method('remove')
                                ->icon('trash')
                                ->confirm(__('Вы уверены, что хотите удалить цель?'))
                                ->parameters(['id' => $goal->id]),
                        ]);
                }),
        ];
    }
}
