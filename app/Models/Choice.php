<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

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
