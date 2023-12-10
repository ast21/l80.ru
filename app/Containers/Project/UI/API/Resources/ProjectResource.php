<?php

namespace App\Containers\Project\UI\API\Resources;

use App\Ship\Abstracts\Resources\AbstractJsonResource;
use Illuminate\Http\Request;

class ProjectResource extends AbstractJsonResource
{
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
