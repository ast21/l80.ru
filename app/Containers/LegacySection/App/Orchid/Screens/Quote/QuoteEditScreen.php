<?php

namespace App\Containers\LegacySection\App\Orchid\Screens\Quote;

use App\Containers\LegacySection\App\Models\Quote;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class QuoteEditScreen extends Screen
{
    public Quote $quote;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Quote $quote): iterable
    {
        return [
            'quote' => $quote,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->quote->exists ? 'Добавить цитату' : 'Редактировать цитату';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить цитату')
                ->icon('plus')
                ->method('createOrUpdate')
                ->canSee(!$this->quote->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->quote->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->quote->exists),
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
            Layout::rows([
                TextArea::make("quote.content")
                    ->title("Цитата")
                    ->placeholder('Введите цитату')
                    ->rows(5)
                    ->value($this->quote->content),
            ]),
        ];
    }

    public function createOrUpdate(Quote $quote, Request $request)
    {
        $request->validate([
            'quote' => ['required', 'array'],
            'quote.content' => ['required', 'string', 'max:1000'],
        ]);

        $quote->fill($request->get('quote'))->save();

        Alert::info('Вы успешно добавили цитату.');

        return redirect()->route('platform.quotes.list');
    }

    public function remove(Quote $quote)
    {
        $quote->delete();

        Alert::info('Вы успешно удалили цитату.');

        return redirect()->route('platform.quotes.list');
    }
}
