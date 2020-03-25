<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $dsOrder= DB::table('order')->get();
        return view('order',['dsOrder'=> $dsOrder]);
    }


    public function create()
    {
        return view('order_add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_id' =>'required',
            'menu_id' =>'required'
        ]);
        $add_order = new Order;
        $add_order->customer_id = $request->customer_id;
        $add_order->menu_id = $request->menu_id;
        $add_order->so_luong = $request->so_luong;
        $add_order->ghi_chu = $request->ghi_chu;
        $add_order->tong_tien = $request->tong_tien;
        $n = $add_order->save();
        if ($n > 0)
            return redirect()->back()->with('alert', 'Order thành công');
        else
            return redirect()->back()->with('alert', 'Order không thành công');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsOrder= DB::table('order')->where('id',$id)->first();
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsOrder = DB::table('order')->where('id', $id)->first();
        return view('order_edit',['dsOrder'=>$dsOrder]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cutomer_id' => 'required',
            'menu_id' => 'required'
        ]);
        $dsOrder= Order::find($id);
        $dsOrder->customer_id= $request->get('customer_id');
        $dsOrder->menu_id = $request->get('menu_id');
        $dsOrder->so_luong = $request->get('so_luong');
        $dsOrder->ghi_chu = $request->get('ghi_chu');
        $dsOrder->tong_tien = $request->get('tong_tien');
        $n = $dsOrder->save();
        if ($n > 0)
            return redirect()->back()->with('alert', 'Update thành công');
        else
            return redirect()->back()->with('alert', 'Update không thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dsOrder= Order::find($id);
        $dsOrder->delete();
    }
}
