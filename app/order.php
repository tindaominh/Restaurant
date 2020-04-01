<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'id',
        'customer_id',
        'menu_id',
        'so_luong',
        'ghi_chu',
        'tong_tien'
    ];
}
