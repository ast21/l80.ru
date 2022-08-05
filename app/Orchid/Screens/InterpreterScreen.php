<?php

namespace App\Orchid\Screens;

use App\Orchid\Fields\Interpreter;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class InterpreterScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PHP Interpreter';
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
                Interpreter::make('interpreter')
                    ->title('PHP interpreter')
                    ->style('max-width: 100%;')
                    ->rows(10),
            ]),
        ];
    }
}
