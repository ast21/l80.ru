<?php

namespace Modules\GiftFinder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'gf_shops';
    protected $fillable = ['name'];
}
