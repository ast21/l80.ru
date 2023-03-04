<?php

namespace App\Containers\GenderPartySection\Voting\UI\API\Controllers;

use App\Containers\GenderPartySection\Voting\Models\Gender;
use App\Containers\GenderPartySection\Voting\UI\API\Resources\GenderResource;
use App\Ship\Parents\Controllers\ParentApiController;

class GenderController extends ParentApiController
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
