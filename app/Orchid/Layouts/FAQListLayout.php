<?php

namespace App\Orchid\Layouts;

use App\Models\FAQ;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class FAQListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'faqs';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make("id", '#')->alignCenter()->width(50)->render(function (FAQ $faq) {
                return Link::make($faq->id)->route('platform.faqs.edit', $faq->id);
            }),
            TD::make('question', 'Вопрос')->render(fn(FAQ $faq) => $faq->question),
            TD::make('answer', 'Отвечено')->alignCenter()->width(100)->bool(),
            TD::make('active', 'Активен')->alignCenter()->width(100)->bool(),
            TD::make('sort', 'Сортировка')
                ->alignCenter()
                ->width(130)
                ->render(function (FAQ $faq) {
                    return Group::make([
                        Button::make('')
                            ->method('up')
                            ->icon('arrow-up')
                            ->parameters(['id' => $faq->id]),
                        Button::make('')
                            ->method('down')
                            ->icon('arrow-down')
                            ->parameters(['id' => $faq->id]),
                    ])->autoWidth();
                }),
            TD::make('edit', 'Действия')
                ->alignRight()
                ->width(100)
                ->render(function (FAQ $faq) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->route('platform.faqs.edit', $faq->id)
                                ->icon('pencil'),
                            Button::make(__('Delete'))
                                ->method('remove')
                                ->icon('trash')
                                ->confirm(__('Вы уверены, что хотите удалить вопрос?'))
                                ->parameters(['id' => $faq->id]),
                        ]);
                }),
        ];
    }
}
