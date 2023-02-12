<?php

namespace App\Containers\LegacySection\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class FAQ extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $table = 'faqs';
    protected $fillable = ['question', 'answer', 'active'];
}
