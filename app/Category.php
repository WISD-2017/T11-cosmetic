<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //商品類別
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];
}
