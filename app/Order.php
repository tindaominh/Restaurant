<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'order';
    protected $fillable=[
        'customer_id',
        'menu_id',
        'so_luong',
        'ghi_chu',
        'tong_tien'
    ];
}
