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
}
