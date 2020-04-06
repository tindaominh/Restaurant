<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\order;
use App\menu;
use App\payment;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=DB::table('order')->get();
        return view('order',['order'=>$order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $menu = DB::table('tbl_menu')->where('id',$id)->get();
        return view('order_add', ['menu' => $menu]);
    }

    public function payment($id)
    {
        $giohang = DB::table('order')->where('customer_id', $id)->get();
        $getcustomer = DB::table('customer')->where('id', $id)->first();
        if(empty($getcustomer->vi_tri))
        {
            return back()->with('alert_error', 'Chưa chọn vị trí và số bàn, vui lòng thêm customer!');
        }
        $total = 0;
        foreach ($giohang as $key) {
            $x = $key->so_luong * $key->tong_tien;
            $total = $total + $x;
        }
        $data['payment_total'] = $total;
        $data['customer_id'] = $id;
        $data['customer_vitri'] = $getcustomer->vi_tri;
        $data['customer_soban'] = $getcustomer->so_ban;
        $data['payment_active'] = 1;
        $ds_payment = DB::table('tbl_payment')->where('customer_id', $id)->get();
        $select_payment = DB::table('tbl_payment')->where('customer_id', $id)->where('customer_soban', $data['customer_soban'])->where('customer_vitri', $data['customer_vitri'])->where('payment_active', $data['payment_active'])->first();
        if ($select_payment) 
        {
            return view('payment1',['payment'=>$ds_payment]);
        }
        else 
        {
            Db::table('tbl_payment')->insert($data);
            return view('payment1',['payment'=>$ds_payment]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request, $id)
    {
        $validated=$request->validated();
        $data= new order;
        $data->customer_id = $request->get('customer_id');
        $data->menu_id = $request->get('menu_id');
        $data->so_luong = $request->get('so_luong');
        $data->ghi_chu = $request->get('ghi_chu');
        $data->tong_tien = $request->get('tong_tien');
        $n=$data->save();
        if($n>0)
        {
            return redirect('/order')->with('alert','success');
        }
        else
        {
            return back()->with('alert_error', 'fails');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = DB::table('order')->where('id', $id)->get();
        return view('order_edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= order::find($id);
        $data->customer_id = $request->get('customer_id');
        $data->menu_id = $request->get('menu_id');
        $data->so_luong = $request->get('so_luong');
        $data->ghi_chu = $request->get('ghi_chu');
        $data->tong_tien = $request->get('tong_tien');
        $n=$data->save();
        if($n>0)
        {
            return redirect('/order')->with('alert','success');
        }
        else
        {
            return back()->with('alert_error', 'fails');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        order::find($id)->delete();
        return redirect('/order')->with('alert', 'success');
    }
}
