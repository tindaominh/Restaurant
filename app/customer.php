<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'id',
        'order_id',
        'so_ban',
        'vi_tri',
        'trang_thai',
        'tong_tien'
    ];
}
