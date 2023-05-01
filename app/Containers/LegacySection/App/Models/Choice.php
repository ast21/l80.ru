<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

/**
 * App\Containers\LegacySection\App\Models\Choice
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Containers\LegacySection\App\Models\ChoiceQuestion> $questions
 * @property-read int|null $questions_count
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
    use AsSource;

    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany(ChoiceQuestion::class);
    }
}
