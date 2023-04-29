<?php

namespace App\Containers\ChoiceSection\Choice\UI\Platform\Screens;

use App\Containers\ChoiceSection\Choice\Models\Choice;
use App\Containers\ChoiceSection\Choice\UI\Platform\Requests\ChoiceSaveRequest;
use Illuminate\Http\RedirectResponse;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

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
        $left = $right = '';
        if ($this->item->exists) {
            $elements = $this->item->elements->toBase();
            $randoms = two_rand(0, $elements->count() - 1);
            $left = $elements->get($randoms[0]);
            $right = $elements->get($randoms[1]);
        }

        return [
            Layout::rows([
                Input::make('title')
                    ->placeholder(__('Enter title...'))
                    ->value($this->item->title),
            ])->title(__('Title')),
            Layout::columns([
                Layout::rows([
                    Button::make($left->title)
                        ->method('left')
                        ->class('btn btn-success d-block w-100')
                        ->parameters(['element_id' => $left->id]),
                ]),
                Layout::rows([
                    Button::make($right->title)
                        ->method('right')
                        ->parameters(['element_id' => $right->id])
                        ->class('btn btn-info d-block w-100')
                        ->style('width: 100%; text-align: center;')
                ]),
            ]),
            Layout::rows([
                Matrix::make('elements')
                    ->columns([
                        __('ID') => 'id',
                        __('Title') => 'title',
                        __('Rating') => 'rating',
                        __('Choice') => 'choice_id',
                    ])
                    ->fields([
                        'id' => Input::make()->readonly(),
                        'title' => Input::make(),
                        'choice_id' => Input::make()->readonly(),
                        'rating' => Input::make()->readonly(),
                    ])
                    ->value(
                        $this->item->elements
                            ->sortBy([
                                ['rating', 'desc'],
                                ['title', 'asc'],
                            ])
                            ->values(),
                    ),
            ])->title(__('Elements')),
        ];
    }

    public function save(Choice $item, ChoiceSaveRequest $request): RedirectResponse
    {
        $item->fill(request()->only('title'))->save();

        $requestElements = collect($request->get('elements'));

        // update exists elements
        $updateElements = $requestElements->filter(fn($element) => $element['id'] !== null)->toArray();
        $item->elements()->upsert($updateElements, 'id');

        // create new elements
        $createElements = $requestElements->filter(fn($element) => $element['id'] === null)->toArray();
        $item->elements()->createMany($createElements);

        Alert::info(__('You have successfully saved') . ' ' . __(Choice::NAME));

        return redirect()->route(Choice::ROUTE_LIST);
    }

    public function remove(Choice $item): RedirectResponse
    {
        $item->delete();
        Alert::info(__('You have successfully deleted') . ' ' . __(Choice::NAME));

        return redirect()->route(Choice::ROUTE_LIST);
    }

    public function left(Choice $item): void
    {
        $elementId = request()->get('element_id');
        $element = $item->elements()->findOrFail($elementId);
        $element->increment('rating');

        Toast::success($element->title . ' +1');
    }

    public function right(Choice $item): void
    {
        $elementId = request()->get('element_id');
        $element = $item->elements()->findOrFail($elementId);
        $element->increment('rating');

        Toast::success($element->title . ' +1');
    }
}
