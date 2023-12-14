<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <form wire:submit="selectLeft" class="">
                <x-filament::button type="submit">
                    {{ $this->left?->title ?? 'Больше нечего' }}
                </x-filament::button>
            </form>
            <div class="flex-1 text-center"><span>vs.</span></div>
            <form wire:submit="selectRight" class="">
                <x-filament::button type="submit">
                    {{ $this->right?->title ?? 'сравнивать ¯\_(ツ)_/¯' }}
                </x-filament::button>
            </form>
        </div>

    </x-filament::section>
</x-filament-widgets::widget>
