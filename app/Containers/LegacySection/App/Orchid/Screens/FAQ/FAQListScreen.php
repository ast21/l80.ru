<?php

namespace App\Containers\LegacySection\App\Orchid\Screens\FAQ;

use App\Containers\LegacySection\App\Models\FAQ;
use App\Containers\LegacySection\App\Orchid\Layouts\FAQListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class FAQListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'faqs' => FAQ::defaultOrder()->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'FAQ';
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
                ->route('platform.faqs.create'),
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
            FAQListLayout::class,
        ];
    }

    public function remove(Request $request): void
    {
        FAQ::findOrFail($request->get('id'))->delete();
        Toast::info('вопрос успешно удален');
    }

    public function up(Request $request): void
    {
        FAQ::findOrFail($request->get('id'))->up();
        Toast::info('Элемент успешно поднят');
    }

    public function down(Request $request): void
    {
        FAQ::findOrFail($request->get('id'))->down();
        Toast::info('Элемент успешно опущен');
    }
}
