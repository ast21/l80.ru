<?php

namespace App\Containers\LegacySection\App\Models;

use Database\Factories\ActionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Metrics\Chartable;

class Action extends Model
{
    use HasFactory;
    use Chartable;

    protected $fillable = ['goal_id', 'task_id', 'description'];

    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class);
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    protected static function newFactory()
    {
        return ActionFactory::new();
    }
}
