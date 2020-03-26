<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payment($id)
    {
        $dsCustomer= DB::table('customer')->where('id',$id)->get();
        return view('payment',['dsCustomer'=>$dsCustomer]);
    }
}
