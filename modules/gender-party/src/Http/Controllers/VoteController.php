<?php

namespace Modules\GenderParty\Http\Controllers;

use Illuminate\Http\Request;
use Modules\GenderParty\Models\Vote;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender_id' => ['required', 'integer', 'exists:directories,id'],
        ]);

        Vote::create($validated);

        return response()->json(['message' => 'Success created'], 201);
    }
}
