<?php

namespace App\Models\GF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    protected $table = 'gf_hobbies';

    public function gifts()
    {
        return $this->belongsToMany(Gift::class, 'gf_gift_has_hobbies');
    }
}
