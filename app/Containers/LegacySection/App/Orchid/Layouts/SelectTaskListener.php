<?php

namespace App\Containers\LegacySection\App\Orchid\Layouts;

use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Models\Task;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layout;
use Orchid\Screen\Layouts\Listener;

class SelectTaskListener extends Listener
{
    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = ['goal_id'];

    /**
     * What screen method should be called
     * as a source for an asynchronous request.
     *
     * The name of the method must
     * begin with the prefix "async"
     *
     * @var string
     */
    protected $asyncMethod = 'asyncSelectGoal';

    /**
     * @return Layout[]
     */
    protected function layouts(): iterable
    {
        $action = $this->query->get('action');
        $goal_id = $this->query->get('goal_id') ?? $action?->goal?->id;
        $task_id = $action?->task?->id;
        $description = $action?->description;

        return [
            \Orchid\Support\Facades\Layout::rows([
                Relation::make('goal_id')
                    ->fromModel(Goal::class, 'name')
                    ->title('Выберите цель')
                    ->value($goal_id),
                Select::make('task_id')
                    ->fromQuery(Task::where('goal_id', $goal_id), 'name')
                    ->value($task_id)
                    ->title('Действие'),
                Quill::make('description')
                    ->title("Описание")
                    ->value($description),
            ]),
        ];
    }
}
