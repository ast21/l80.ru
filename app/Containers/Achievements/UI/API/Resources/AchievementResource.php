<?php

namespace App\Containers\Achievements\UI\API\Resources;

use App\Ship\Abstracts\Resources\AbstractJsonResource;
use Illuminate\Http\Request;

class AchievementResource extends AbstractJsonResource
{
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
