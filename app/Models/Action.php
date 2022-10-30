<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

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
