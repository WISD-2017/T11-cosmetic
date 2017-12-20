<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //購物車
    protected $table = 'shoppingcarts';
    protected $fillable = [
        'user_id',
        'product_id',
        'amount',
    ];
}
