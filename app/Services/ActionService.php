<?php

namespace App\Services;

use App\Models\Action;
use App\Models\Goal;
use Carbon\Carbon;

class ActionService
{
    public function getChartDataset(): array
    {
        $days = 30;
        $dataset = [];
        $goals = Goal::orderBy('created_at')->get();
        $actions = Action::where('created_at', '>=', Carbon::now()->addDays(-$days))->get();

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

        return $dataset;
    }
}
