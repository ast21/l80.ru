<?php

namespace App\Orchid\Screens;

use App\Models\Action;
use App\Models\Goal;
use App\Models\Quote;
use App\Orchid\Layouts\ActionChartLayout;
use Carbon\Carbon;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class MainScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $actions = Action::all();
        $goals = Goal::orderBy('created_at')->get();
        $days = 30;
        $dataset = [];

        foreach ($goals as $goal) {
            $labels = [];
            $values = [];
            foreach (range(1, 30) as $num) {
                $date = Carbon::now()->addDays($num - $days);
                $labels[] = $date->format('d.m.Y');
                $values[] = $actions
                    ->where('goal_id', $goal->id)
                    ->where('created_at', '>=', $date)
                    ->where('created_at', '<', $date->addDay())
                    ->count();
            }

            $dataset[] = [
                'name' => $goal->name,
                'labels' => $labels,
                'values' => $values,
            ];
        }

        return [
            'actions' => $dataset,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Dashboard';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::view('main', ['quote' => Quote::inRandomOrder()->limit(1)->first()]),
            ActionChartLayout::make('actions', __('Actions')),
        ];
    }
}
