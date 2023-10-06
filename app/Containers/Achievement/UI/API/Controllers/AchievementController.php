<?php

namespace App\Containers\Achievement\UI\API\Controllers;

use App\Containers\Achievement\Models\Achievement;
use App\Containers\Achievement\UI\API\Requests\CreateAchievementRequest;
use App\Containers\Achievement\UI\API\Requests\UpdateAchievementRequest;
use App\Containers\Achievement\UI\API\Resources\AchievementResource;
use App\Ship\Abstracts\Controllers\AbstractApiController;

class AchievementController extends AbstractApiController
{
    public function index()
    {
        return AchievementResource::collection(Achievement::all());
    }

    public function store(CreateAchievementRequest $request)
    {
        //
    }

    public function show(string $id)
    {
        return AchievementResource::make(Achievement::findOrFail($id));
    }

    public function update(UpdateAchievementRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
