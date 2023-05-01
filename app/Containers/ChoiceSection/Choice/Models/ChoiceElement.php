<?php

namespace App\Containers\ChoiceSection\Choice\Models;

use AdminKit\Porto\Abstracts\Models\Model;
use App\Containers\ChoiceSection\Choice\Data\Factories\ChoiceElementFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

/**
 * App\Containers\ChoiceSection\Choice\Models\ChoiceElement
 *
 * @property int $id
 * @property int $choice_id
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $rating
 * @property mixed $history
 * @property-read \App\Containers\ChoiceSection\Choice\Models\Choice $choice
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement defaultSort(string $column, string $direction = 'asc')
 * @method static \App\Containers\ChoiceSection\Choice\Data\Factories\ChoiceElementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement filters(?mixed $kit = null, ?\Orchid\Filters\HttpFilter $httpFilter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement filtersApply(iterable $filters = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement filtersApplySelection($class)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereChoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChoiceElement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ChoiceElement extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'title',
        'choice_id',
    ];

    protected $allowedFilters = [
        'id',
        'title',
    ];

    protected $allowedSorts = [
        'id',
        'title'
    ];

    protected static function newFactory(): Factory
    {
        return ChoiceElementFactory::new();
    }

    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
}
