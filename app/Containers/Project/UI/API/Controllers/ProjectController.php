<?php

namespace App\Containers\Project\UI\API\Controllers;

use App\Containers\Project\Models\Project;
use App\Containers\Project\UI\API\Requests\CreateProjectRequest;
use App\Containers\Project\UI\API\Requests\UpdateProjectRequest;
use App\Containers\Project\UI\API\Resources\ProjectResource;
use App\Ship\Abstracts\Controllers\AbstractApiController;

class ProjectController extends AbstractApiController
{
    public function index()
    {
        return ProjectResource::collection(Project::all());
    }

    public function store(CreateProjectRequest $request)
    {
        //
    }

    public function show(string $id)
    {
        return ProjectResource::make(Project::findOrFail($id));
    }

    public function update(UpdateProjectRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
