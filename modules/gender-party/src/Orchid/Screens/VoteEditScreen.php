<?php

namespace Modules\GenderParty\Orchid\Screens;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Modules\GenderParty\Models\Gender;
use Modules\GenderParty\Models\Vote;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class VoteEditScreen extends Screen
{
    public Vote $item;

    public function query(Vote $item): iterable
    {
        return [
            'item' => $item,
        ];
    }

    public function name(): ?string
    {
        return $this->item->exists
            ? __('Edit') . ' ' . __(Vote::NAME) . ' #' . $this->item->id
            : __('Create') . ' ' . __(Vote::NAME);
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
            Button::make(__('Save'))
                ->icon('check')
                ->method('save')
                ->canSee(!$this->item->exists),

            Button::make(__('Update'))
                ->icon('note')
                ->method('save')
                ->canSee($this->item->exists),

            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->item->exists)
                ->confirm(__("Are you sure you want to delete entry #{$this->item->id}?")),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title(__('Name'))
                    ->required()
                    ->value($this->item->name),
                Select::make('gender_id')
                    ->fromModel(Gender::class, 'name')
                    ->required()
                    ->value($this->item->gender_id),
            ]),
        ];
    }

    public function save(Vote $item, Request $request): RedirectResponse
    {
        // validate
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender_id' => ['required', 'integer', 'exists:directories,id'],
        ]);

        $item->fill($validated)->save();
        Alert::info(__('You have successfully saved') . ' ' . __(Vote::NAME));

        return redirect()->route(Vote::ROUTE_LIST);
    }

    public function remove(Vote $item): RedirectResponse
    {
        $item->delete();
        Alert::info(__('You have successfully deleted') . ' ' . __(Vote::NAME));

        return redirect()->route(Vote::ROUTE_LIST);
    }
}
