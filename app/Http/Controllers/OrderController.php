<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
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

    public function add_order(Request $request)
    {
        $request->validate([
            'customer_id'=>'required'
        ]);
        $data=array();
        $data['customer_id']=$request->customer_id;
        $data['menu_id']=$request->menu_id;
        $data['ghi_chu']=$request->ghi_chu;
        $data['so_luong'] = $request->so_luong;
        $data['tong_tien'] = $request->tong_tien;
        $n= DB::table('order')->insert($data);
        if ($n > 0)
            return redirect()->back()->with('alert', 'Them order thành công');
        else
            return redirect()->back()->with('alert', 'Them order không thành công');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsCustomer = DB::table('customer')->where('id', $id)->first();
        $dsOrder = DB::table('order')->get();
        return view('order_view',['dsCustomer'=>$dsCustomer, 'dsOrder'=>$dsOrder]);
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
        
        $data=array();
        $data['customer_id']=$request->customer_id;
        $data['menu_id']= $request->menu_id;
        $data['ghi_chu'] = $request->ghi_chu;
        $data['so_luong'] = $request->so_luong;
        $data['tong_tien'] = $request->tong_tien;
        $n=DB::table('order')->where('id', $id)->update($data);
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
        DB::table('order')->where('id',$id)->delete();
        return redirect()->back()->with('alert', 'Delete thành công');
    }
}
