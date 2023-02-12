<?php

namespace App\Containers\LegacySection\App\Http\Controllers;

class ChoiceController extends Controller
{
    public function index()
    {
        return view('choice.index', [
            'item1' => 'item1',
            'item2' => 'item2',
        ]);
    }
}
