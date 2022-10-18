<?php

namespace App\Orchid\Screens;

use App\Models\Choice;
use App\Models\Quote;
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
        return [];
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
        ];
    }
}
