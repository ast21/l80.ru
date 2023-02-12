<?php

namespace App\Containers\LegacySection\App\Orchid\Screens\Goal;

use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Orchid\Layouts\GoalListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class GoalListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'goals' => Goal::paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __('Goals');
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->route('platform.goals.create'),
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
            GoalListLayout::class,
        ];
    }

    public function remove(Request $request): void
    {
        Goal::findOrFail($request->get('id'))->delete();
        Toast::info('вопрос успешно удален');
    }
}
