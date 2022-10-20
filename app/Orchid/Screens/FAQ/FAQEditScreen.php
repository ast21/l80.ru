<?php

namespace App\Orchid\Screens\FAQ;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class FAQEditScreen extends Screen
{
    public FAQ $faq;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(FAQ $faq): iterable
    {
        return [
            'faq' => $faq,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->faq->exists ? 'Редактировать вопрос' : 'Добавить вопрос';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Добавить вопрос')
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->faq->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->faq->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->faq->exists),
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
                TextArea::make('faq.question')
                    ->title("Вопрос")
                    ->required()
                    ->rows(5)
                    ->placeholder('Введите Вопрос')
                    ->value($this->faq->question),
                Quill::make('faq.answer')
                    ->title("Ответ")
                    ->value($this->faq->answer),
                CheckBox::make('faq.active')
                    ->sendTrueOrFalse()
                    ->checked()
                    ->placeholder('Отображать на сайте')
                    ->value($this->faq->active),
            ]),
        ];
    }

    public function save(FAQ $faq, Request $request)
    {
        $request->validate([
            'faq' => ['required', 'array'],
            'faq.question' => ['required', 'string', 'max:1000'],
            'faq.answer' => ['nullable', 'string', 'max:10000'],
            'faq.active' => ['required', 'boolean'],
        ]);

        $faq->fill($request->get('faq'))->save();

        Alert::info('Вы успешно добавили вопрос.');

        return redirect()->route('platform.faqs.list');
    }

    public function remove(FAQ $faq)
    {
        $faq->delete();

        Alert::info('Вы успешно удалили вопрос.');

        return redirect()->route('platform.faqs.list');
    }
}
