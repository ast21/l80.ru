<?php

namespace App\Ship\Abstracts\Models;

use AdminKit\Core\Traits\CyrillicChars;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelEloquentModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * @method Builder isActive()
 */
abstract class AbstractModel extends LaravelEloquentModel
{
    use CyrillicChars;
    use HasFactory;

    public function scopeIsActive(Builder $query)
    {
        return $query->where('active', true);
    }
}
