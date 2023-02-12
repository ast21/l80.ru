<?php

namespace App\Containers\LegacySection\App\Orchid\Screens;

use App\Containers\LegacySection\App\Models\Quote;
use App\Containers\LegacySection\App\Orchid\Fields\Cmd;
use App\Containers\LegacySection\App\Orchid\Layouts\ActionChartLayout;
use App\Containers\LegacySection\App\Services\ActionService;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class MainScreen extends Screen
{
    public function __construct(private ActionService $actionService)
    {
    }

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'actions' => $this->actionService->getChartDataset(),
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
            Layout::rows([
                Cmd::make('cmd')
                    ->title('Личный поисковик')
                    ->id('cmd-input')
                    ->style('max-width: 100%;')
            ]),
            Layout::view('main', ['quote' => Quote::inRandomOrder()->limit(1)->first()]),
            ActionChartLayout::make('actions', __('Actions')),
        ];
    }
}
