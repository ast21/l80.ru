<?php

namespace Modules\GenderParty\Http\Controllers;

use Modules\GenderParty\Http\Resources\GenderResource;
use Modules\GenderParty\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::query()
            ->withCount('votes')
            ->orderBy('id', 'desc')
            ->get();

        return GenderResource::collection($genders);
    }
}
