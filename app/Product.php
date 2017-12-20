<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 商品
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category',
        'price',
        'amount',
        'shelves',
    ];
}
