<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterpreterController extends Controller
{
    public function exec(Request $request)
    {
        $content = $request->input('content');

        $file = '/tmp/content';
        $output_file = '/tmp/content_output';
        $error_file = '/tmp/content_error';
        file_put_contents($file, $content);

        try {
            exec("php -f $file 1> $output_file 2> $error_file", $std_output, $result_code);
        } catch (\Exception $e) {
            throw new \Exception($e);
        }

        return response()->json([
            'output' => file_get_contents($output_file),
            'error' => file_get_contents($error_file),
        ]);
    }
}
