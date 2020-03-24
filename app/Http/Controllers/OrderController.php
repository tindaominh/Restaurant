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
        $add_order = new Order;
        $add_order->customer_id = $request->customer_id;
        $add_order->menu_id = $request->menu_id;
        $add_order->so_luong = $request->so_luong;
        $add_order->ghi_chu = $request->ghi_chu;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
