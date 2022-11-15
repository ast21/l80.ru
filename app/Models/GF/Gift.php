<?php

namespace App\Models\GF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $table = 'gf_gifts';
    protected $fillable = ['name', 'gender', 'age_start', 'age_end'];

    public function hobbies()
    {
        return $this->belongsToMany(Hobby::class, 'gf_gift_has_hobbies');
    }
}
