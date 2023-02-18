<?php

namespace App\Containers\LegacySection\App\Models;

use Database\Factories\GoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'active'];

    protected static function newFactory()
    {
        return GoalFactory::new();
    }
}
