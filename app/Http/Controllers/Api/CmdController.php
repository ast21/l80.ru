<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmdController extends Controller
{
    public function exec(Request $request)
    {
        return response()->json(['message' => 'Success', 'data' => $request->command]);
    }
}
