<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransPort extends Model
{
    //運送方式
    protected $table = 'transports';
    protected $fillable = [
        'name',
        'cost',
    ];


    public function orders() //  TransPort (1) -> Order (n)
    {
        return $this->hasMany(Order::class);
    }

}
