<?php

namespace App\Containers\Project\Models;

use App\Containers\Comparison\Traits\HasComparisons;
use App\Containers\Project\Enum\ProjectStatus;
use App\Containers\Skill\Models\Skill;
use App\Ship\Abstracts\Models\AbstractModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends AbstractModel implements HasMedia
{
    use InteractsWithMedia;
    use HasComparisons;

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => ProjectStatus::class,
    ];

    protected static function booted(): void
    {
        static::creating(function ($project) {
            $project->user_id = auth()->id();
        });
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->crop('crop-center', 112, 63);
    }
}
