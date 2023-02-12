<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Metrics\Chartable;

class Action extends Model
{
    use HasFactory;
    use Chartable;

    protected $fillable = ['goal_id', 'task_id', 'description'];

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
