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

    public function payment() //  Order (n) -> Payment (1)
    {
        return $this->belongsTo(Payment::class);
    }

    public function transport() //  Order (n) -> TransPort (1)
    {
        return $this->belongsTo(TransPort::class);
    }

    public function orderitem() //  Order (n) -> OrderItem (1)
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function orderproblem() //  Order (n) -> OrderProblem (1)
    {
        return $this->belongsTo(OrderProblem::class);
    }

}
