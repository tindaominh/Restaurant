<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'so_ban',
        'vi_tri',
        'trang_thai',
        'tong_tien'
    ];
}
