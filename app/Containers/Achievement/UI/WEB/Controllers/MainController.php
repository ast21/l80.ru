<?php

declare(strict_types=1);

namespace App\Containers\Achievement\UI\WEB\Controllers;

use App\Containers\Achievement\Models\Achievement;
use Illuminate\View\View;

class MainController
{
    public function index(): View
    {
        return view('container@Achievement::index', ['achievements' => Achievement::all()->toBase()]);
    }
}
