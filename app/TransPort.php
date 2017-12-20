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
}
