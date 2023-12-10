<x-filament-widgets::widget>
    <x-filament::section>
        <form wire:submit="create" class="flex items-center gap-x-3">
            <div class="flex-1">{{ $this->form }}</div>

            <x-filament::button type="submit">
                {{ __('filament-panels::resources/pages/create-record.form.actions.create.label') }}
            </x-filament::button>
        </form>
    </x-filament::section>
</x-filament-widgets::widget>
