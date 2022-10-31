<?php

namespace App\Orchid\Screens\Choice;

use App\Models\Choice;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class ChoiceListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'choices' => Choice::paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список элементов выбора';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить')
                ->icon('plus')
                ->route('platform.choices.create')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('choices', [
                TD::make('name', 'Название')
                    ->render(function (Choice $choice) {
                        return Link::make($choice->name)
                            ->route('platform.choices.edit', $choice);
                    }),
                TD::make('count', 'Количество вопросов')
                    ->render(function (Choice $choice) {
                        return count($choice->questions()->get());
                    }),
            ]),
        ];
    }
}
