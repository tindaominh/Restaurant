<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'tbl_order';
    protected $fillable = [
    'order_id',
    'order_ma',
    'customer_id',
    'menu_id',
    'menu_soluong',
    'menu_price'
    ];
}
