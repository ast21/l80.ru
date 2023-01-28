<?php

namespace Modules\GenderParty\Orchid\Screens;

use Modules\GenderParty\Models\Vote;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class VoteListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'items' => Vote::query()
                ->with('gender')
                ->filters()
                ->orderBy('id', 'desc')
                ->paginate(),
        ];
    }

    public function name(): ?string
    {
        return __(Vote::NAME_PLURAL);
    }

    public function permission(): ?iterable
    {
        return [
            Vote::PERMISSION,
        ];
    }

    public function commandBar(): iterable
    {
        return [
            Link::make(__('Create'))
                ->icon('plus')
                ->route(Vote::ROUTE_CREATE),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('items', [
                // id
                TD::make('id', __('#'))
                    ->alignCenter()
                    ->width(50)
                    ->sort()
                    ->render(fn(Vote $item) => Link::make($item->id)->route(Vote::ROUTE_EDIT, $item->id)),

                // custom columns
                TD::make('name', __('Name'))
                    ->filter(Input::make())
                    ->sort()
                    ->render(fn(Vote $item) => $item->name),
                TD::make('gender_id', __('Gender ID'))
                    ->sort()
                    ->render(fn(Vote $item) => $item->gender->name),

                // actions
                TD::make('edit', __('Actions'))
                    ->alignRight()
                    ->width(100)
                    ->render(function (Vote $item) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make(__('Edit'))
                                    ->route(Vote::ROUTE_EDIT, $item->id)
                                    ->icon('pencil'),
                                Button::make(__('Delete'))
                                    ->method('remove')
                                    ->icon('trash')
                                    ->confirm(__("Are you sure you want to delete entry #$item->id?"))
                                    ->parameters(['id' => $item->id]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Vote $item): void
    {
        $item->delete();
        Alert::info(__('You have successfully deleted') . ' ' . __(Vote::NAME));
    }
}
