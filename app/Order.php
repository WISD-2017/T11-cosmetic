<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //訂單
    protected $table = 'categories';
    protected $fillable = [
        'user_id',
        'orderdate',
        'paymentdate',
        'transport',
        'payment',
        'recipient',
        'phone',
        'address',
        'void',
        'void_reason',
    ];
}
