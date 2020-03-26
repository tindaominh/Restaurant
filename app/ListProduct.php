<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListProduct extends Model
{
    protected $table='listproduct';
    protected $fillable=[
        'ten_sp',
        'gia_sp',
        'hinh'
    ];
}
