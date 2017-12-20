<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //訂單明細
    protected $table = 'orderitems';
    protected $fillable = [
        'name',
        'order_id',
        'amount',
    ];
}
