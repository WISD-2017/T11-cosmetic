<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //商品圖片
    protected $table = 'photos';
    protected $fillable = [
        'product_id',
        'address',
    ];
}
