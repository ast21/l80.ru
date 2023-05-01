<?php

namespace App\Containers\LegacySection\App\Models;

use Database\Factories\ActionFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Metrics\Chartable;

/**
 * App\Containers\LegacySection\App\Models\Action
 *
 * @property int $id
 * @property int $goal_id
 * @property int $task_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Containers\LegacySection\App\Models\Goal|null $goal
 * @property-read \App\Containers\LegacySection\App\Models\Task|null $task
 * @method static \Illuminate\Database\Eloquent\Builder|Action averageByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Action countByDays($startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Action countForGroup(string $groupColumn)
 * @method static \Database\Factories\ActionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Action maxByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Action minByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Action newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Action newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Action query()
 * @method static \Illuminate\Database\Eloquent\Builder|Action sumByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Action valuesByDays(string $value, $startDate = null, $stopDate = null, string $dateColumn = 'created_at')
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereGoalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Action whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
