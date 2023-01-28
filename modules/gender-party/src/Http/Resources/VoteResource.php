<?php

namespace Modules\GenderParty\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VoteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'gender' => $this->gender->name,
        ];
    }
}
