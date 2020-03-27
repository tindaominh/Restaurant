<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table='tbl_menu';
    protected $fillable= [
        'menu_id',
        'menu_name',
        'menu_price',
        'menu_image',
        'menu_active'
    ];
}
