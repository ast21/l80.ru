<?php

namespace App\Containers\ChoiceSection\Choice\Models;

use AdminKit\Porto\Abstracts\Models\Model;
use App\Containers\ChoiceSection\Choice\Data\Factories\ChoiceFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

/**
 * App\Containers\ChoiceSection\Choice\Models\Choice
 *
 * @property int $id
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Containers\ChoiceSection\Choice\Models\ChoiceElement> $elements
 * @property-read int|null $elements_count
 * @method static \Illuminate\Database\Eloquent\Builder|Choice defaultSort(string $column, string $direction = 'asc')
 * @method static \App\Containers\ChoiceSection\Choice\Data\Factories\ChoiceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Choice filters(?mixed $kit = null, ?\Orchid\Filters\HttpFilter $httpFilter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice filtersApply(iterable $filters = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Choice filtersApplySelection($class)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Choice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Choice extends Model
{
    use HasFactory;
    use AsSource, Attachable, Filterable;

    public const NAME = 'Choice';

    public const NAME_PLURAL = 'Choices';

    public const ICON = 'folder-alt';

    public const ROUTE_LIST = 'platform.choices.list';

    public const ROUTE_EDIT = 'platform.choices.edit';

    public const ROUTE_CREATE = 'platform.choices.create';

    public const PERMISSION_CREATE = 'platform.choices.create';

    public const PERMISSION_READ = 'platform.choices.read';

    public const PERMISSION_UPDATE = 'platform.choices.update';

    public const PERMISSION_DELETE = 'platform.choices.delete';

    protected $fillable = [
        'title',
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
        return ChoiceFactory::new();
    }

    public function elements(): HasMany
    {
        return $this->hasMany(ChoiceElement::class);
    }
}
