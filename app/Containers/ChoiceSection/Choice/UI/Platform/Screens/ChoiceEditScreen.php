<?php

namespace App\Containers\ChoiceSection\Choice\UI\Platform\Screens;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use App\Containers\ChoiceSection\Choice\Models\ChoiceTranslation;
use App\Containers\ChoiceSection\Choice\UI\Platform\Requests\ChoiceSaveRequest;
use Illuminate\Http\RedirectResponse;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ChoiceEditScreen extends Screen
{
    public Choice $item;

    public function query(Choice $item): iterable
    {
        return [
            'item' => $item,
        ];
    }

    public function name(): ?string
    {
        return $this->item->exists
            ? __('Edit') . ' ' . __(Choice::NAME) . ' #' . $this->item->id
            : __('Create') . ' ' . __(Choice::NAME);
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
                ->type(Color::DANGER())
                ->confirm(__("Are you sure you want to delete entry #{$this->item->id}?")),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('title')
                    ->title(__('Title'))
                    ->placeholder(__('Enter title...'))
                    ->value($this->item->title),
                Matrix::make('elements')
                    ->title(__('Elements'))
                    ->columns([
                        'ID' => 'id',
                        __('Title') => 'title',
                    ])
                    ->fields([
                        'id' => Input::make()->readonly(),
                        'title' => Input::make(),
                    ])
                    ->value($this->item->elements),
            ]),
        ];
    }

    public function save(Choice $item, ChoiceSaveRequest $request): RedirectResponse
    {
        $item->fill(request()->only('title'))->save();
        $item->elements()->delete();
        $item->elements()->createMany($request->get('elements'));
        Alert::info(__('You have successfully saved') . ' ' . __(Choice::NAME));

        return redirect()->route(Choice::ROUTE_LIST);
    }

    public function remove(Choice $item): RedirectResponse
    {
        $item->delete();
        Alert::info(__('You have successfully deleted') . ' ' . __(Choice::NAME));

        return redirect()->route(Choice::ROUTE_LIST);
    }
}
