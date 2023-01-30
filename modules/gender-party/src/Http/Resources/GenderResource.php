<?php

namespace Modules\GenderParty\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GenderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'color' => $this->getProperty('color'),
            'code' => $this->getProperty('code'),
            'votes_count' => $this->whenHas('votes_count'),
        ];
    }
}
