<?php

namespace App\Containers\Achievements\UI\API\Controllers;

use App\Containers\Achievements\Models\Achievement;
use App\Containers\Achievements\UI\API\Requests\CreateAchievementRequest;
use App\Containers\Achievements\UI\API\Requests\UpdateAchievementRequest;
use App\Containers\Achievements\UI\API\Resources\AchievementResource;
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
