<?php

namespace App\Containers\PSG\UI\WEB\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class PSG extends Component
{
    public int $count = 0;

    public function render(): View
    {
        return view('container@PSG::livewire.psg');
    }

    public function increment(): void
    {
        $this->count++;
    }
}
