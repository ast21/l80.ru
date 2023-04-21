<?php

namespace App\Containers\ChoiceSection\Choice\UI\Platform\Screens;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use App\Containers\ChoiceSection\Choice\UI\Platform\Layouts\ChoiceListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ChoiceListScreen extends Screen
{
    public function query(): iterable
    {
        $items = Choice::query()->get();

        return [
            'items' => $items,
        ];
    }

    public function name(): ?string
    {
        return __(Choice::NAME_PLURAL);
    }

    public function permission(): ?iterable
    {
        return [
            Choice::PERMISSION_READ,
        ];
    }

    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create'))
                ->icon('plus')
                ->route(Choice::ROUTE_CREATE),
        ];
    }

    /**
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            ChoiceListLayout::class,
        ];
    }

    public function remove(Choice $item): void
    {
        $item->delete();
        Alert::info(__('You have successfully deleted') . ' ' . __(Choice::NAME));
    }
}
