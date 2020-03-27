<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'tbl_customer';
    protected $fillable = [
        'customer_id',
        'order_id',
        'customer_soban',
        'customer_vitri',
        'customer_note'
    ];
}
