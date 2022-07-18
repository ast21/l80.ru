<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Fields\Code;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Layouts\Listener;

class PHPListener extends Listener
{
    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = ['content'];

    /**
     * What screen method should be called
     * as a source for an asynchronous request.
     *
     * The name of the method must
     * begin with the prefix "async"
     *
     * @var string
     */
    protected $asyncMethod = 'asyncExec';

    /**
     * @return Layout[]
     */
    protected function layouts(): iterable
    {
        return [
            Layout::rows([
                Code::make('output')
                    ->title('Output')
                    ->readonly()
                    ->canSee($this->query->has('output')),
                Code::make('error')
                    ->title('Errors')
                    ->readonly()
                    ->canSee($this->query->has('error')),
            ]),
        ];
    }
}
