<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\PHPListener;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PHPScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PHP Interpreter';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
//            Button::make('Выполнить')
//                ->method('exec'),
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
                TextArea::make('content')
                    ->title('PHP Code')
                    ->style('max-width: 100%;')
                    ->rows(10),
            ]),

            PHPListener::class,
        ];
    }

    public function asyncExec(string $content = null)
    {
        $file = '/tmp/content';
        $output_file = '/tmp/content_output';
        $error_file = '/tmp/content_error';
        file_put_contents($file, $content);

        try {
            exec("php -f $file 1> $output_file 2> $error_file", $std_output, $result_code);
        } catch (\Exception $e) {
            throw new \Exception($e);
        }

        return [
            'content' => $content,
            'output' => file_get_contents($output_file),
            'error' => file_get_contents($error_file),
        ];
    }
}
