<?php

namespace Modules\GenderParty\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Vote extends Model
{
    use HasFactory, AsSource, Filterable;

    public const NAME = 'Vote';
    public const NAME_PLURAL = 'Votes';
    public const ICON = 'friends';
    public const ROUTE_LIST = 'platform.gp.votes.list';
    public const ROUTE_EDIT = 'platform.gp.votes.edit';
    public const ROUTE_CREATE = 'platform.gp.votes.create';
    public const PERMISSION = 'platform.gp.votes';

    protected $table = 'gp_votes';

    protected $fillable = [
        'name',
        'gender_id',
    ];

    protected $allowedFilters = [
        'name',
        'gender_id',
    ];

    protected $allowedSorts = [
        'id',
        'name',
        'gender_id',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
