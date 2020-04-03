<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class payment extends Model
{
    protected $table='tbl_payment';
    protected $fillable=[
        'payment_id',
        'customer_id',
        'customer_soban',
        'customer_vitri',
        'menu_id',
        'payment_total',
        'payment_active'
    ];
}
