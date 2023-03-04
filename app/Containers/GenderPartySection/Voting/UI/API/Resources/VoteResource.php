<?php

namespace App\Containers\GenderPartySection\Voting\UI\API\Resources;

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
