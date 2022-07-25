<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function index()
    {
        return view('choose.index', [
            'item1' => 'item1',
            'item2' => 'item2',
        ]);
    }
}
