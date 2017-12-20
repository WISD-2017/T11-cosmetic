<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProblem extends Model
{
    //訂單問題
    protected $table = 'orderproblems';
    protected $fillable = [
        'user_id',
        'order_id',
        'problem',
    ];


    public function orders() //  OrderProblem (1) -> Order (n)
    {
        return $this->hasMany(Order::class);
    }

}
