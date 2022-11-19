<?php

namespace Modules\GiftFinder\Orchid\Screens;

use Illuminate\Http\Request;
use Modules\GiftFinder\Models\Gift;
use Modules\GiftFinder\Models\Product;
use Modules\GiftFinder\Models\Shop;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ProductEditScreen extends Screen
{
    public Product $item;
    private string $name = 'продукт';
    private string $routeList = 'platform.gf.products.list';

    public function query(Product $item): iterable
    {
        return [
            'item' => $item,
        ];
    }

    public function name(): ?string
    {
        return $this->item->exists ? "Редактировать $this->name" : "Добавить $this->name";
    }

    public function commandBar(): iterable
    {
        return [
            Button::make("Добавить $this->name")
                ->icon('plus')
                ->method('save')
                ->canSee(!$this->item->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('save')
                ->canSee($this->item->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->item->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title('Название')
                    ->required()
                    ->placeholder($this->name)
                    ->value($this->item->name),
                Relation::make('gift_id')
                    ->fromModel(Gift::class, 'name')
                    ->title('Подарок')
                    ->required()
                    ->value($this->item->gift_id),
                Relation::make('shop_id')
                    ->fromModel(Shop::class, 'name')
                    ->title('Магазин')
                    ->required()
                    ->value($this->item->shop_id),
                Input::make('price')
                    ->title('Стоимость')
                    ->required()
                    ->value($this->item->price)
                    ->type('number')
                    ->step(0.01),
                Input::make('url')
                    ->title('Ссылка')
                    ->value($this->item->url),
            ])
        ];
    }

    public function save(Product $item, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gift_id' => ['required', 'exists:gf_gifts,id'],
            'shop_id' => ['required', 'exists:gf_shops,id'],
            'price' => ['required', 'numeric'],
            'url' => ['nullable', 'string', 'max:2000'],
        ]);

        $item->fill($validatedData)->save();

        Alert::info("Вы успешно добавили $this->name.");

        return redirect()->route($this->routeList);
    }

    public function remove(Product $item)
    {
        $item->delete();

        Alert::info("Вы успешно удалили $this->name.");

        return redirect()->route($this->routeList);
    }
}
