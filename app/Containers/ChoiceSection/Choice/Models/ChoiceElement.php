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
 * @property int $id
 * @property int $choice_id
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
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
