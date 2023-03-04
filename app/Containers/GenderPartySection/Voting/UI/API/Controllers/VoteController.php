<?php

namespace App\Containers\GenderPartySection\Voting\UI\API\Controllers;

use App\Containers\GenderPartySection\Voting\Models\Vote;
use App\Ship\Parents\Controllers\ParentApiController;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\GenderParty\Http\Resources\VoteResource;

class VoteController extends ParentApiController
{
    public function index()
    {
        $votes = Vote::query()->orderBy('id', 'desc')->limit(4)->get();
        return VoteResource::collection($votes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender_id' => [
                'required',
                'integer',
                Rule::exists('directories', 'id')->where(fn($query) => $query->where('type', 'Gender'))
            ],
        ]);

        Vote::create($validated);

        return response()->json(['message' => 'Success created'], 201);
    }
}
