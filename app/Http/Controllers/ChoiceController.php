<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
