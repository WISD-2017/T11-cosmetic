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

    public function category() //  Product (n) -> Category (1)
    {
        return $this->belongsTo(Category::class);
    }

    public function photo() //  Product (n) -> Photo (1)
    {
        return $this->belongsTo(Photo::class);
    }

}
