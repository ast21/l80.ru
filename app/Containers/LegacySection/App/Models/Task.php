<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['goal_id', 'name', 'description', 'active'];

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }
}
