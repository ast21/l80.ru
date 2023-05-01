<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Containers\LegacySection\App\Models\ChoiceQuestion
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceQuestion query()
 * @mixin \Eloquent
 */
class ChoiceQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
