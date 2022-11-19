<?php

namespace App\Models\GF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'gf_products';
    protected $fillable = ['name', 'gift_id', 'shop_id', 'price', 'url'];

    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
