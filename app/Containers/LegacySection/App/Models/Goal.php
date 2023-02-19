<?php

namespace App\Containers\LegacySection\App\Models;

use App\Containers\LegacySection\App\Orchid\Presenters\GoalPresenter;
use Database\Factories\GoalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Goal extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name', 'description', 'active'];

    protected static function newFactory()
    {
        return GoalFactory::new();
    }

    public function searchableAs()
    {
        return 'goals_index';
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
        ];
    }

    public function presenter()
    {
        return new GoalPresenter($this);
    }

//    public function getScoutKey()
//    {
//        return $this->description;
//    }
}
