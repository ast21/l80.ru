<?php

namespace Modules\GenderParty\Models;

use AdminKit\Directories\Models\DirectoryModel;

class Gender extends DirectoryModel
{
    public function votes()
    {
        return $this->hasMany(Vote::Class);
    }
}
