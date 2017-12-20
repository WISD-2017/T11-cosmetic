<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //付款方式
    protected $table = 'payments';
    protected $fillable = [
        'name',
    ];


    public function orders() //  Payment (1) -> Order (n)
    {
        return $this->hasMany(Order::class);
    }

}
