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
        $dsCustomer= DB::table('customer')->get();
        $dsOrder= DB::table('order')->get();
        return view('order',['dsOrder'=> $dsOrder,'dsCustomer'=>$dsCustomer]);
<<<<<<< Updated upstream
    }

    public function select_order($id)
    {   
        $list_order = DB::table('tbl_order')->where('customer_id',$id)
        ->join('tbl_menu','tbl_menu.menu_id','=','tbl_order.menu_id')->get();
        $list_order2 = DB::table('tbl_order')->where('customer_id',$id)->first();
        if($list_order2)
        {
            $manage = view('order_list')->with('list_order',$list_order);
            return view('layout')->with('order_list',$manage);
        }else
        {
            Session::put('message','Chưa có order món nào.');
            return Redirect::to('/customer');
        }
    }

    public function payment($id)
    {
        $giohang = DB::table('tbl_order')->where('customer_id',$id)->get();
        $getcustomer = DB::table('tbl_customer')->where('customer_id',$id)->first();
        $total = 0;
        foreach($giohang as $key)
        {
            $x = $key->menu_soluong * $key->menu_price;
            $total = $total + $x;
        }
        $data['payment_total'] = $total;
        $data['customer_id'] = $id;
        $data['customer_vitri'] = $getcustomer->customer_vitri;
        $data['customer_soban'] = $getcustomer->customer_soban;
        $data['payment_active'] = 1;
        $ds_payment = DB::table('tbl_payment')->where('customer_id',$id)->get();
        $select_payment = DB::table('tbl_payment')->where('customer_id',$id)->where('customer_soban',$data['customer_soban'])->where('customer_vitri',$data['customer_vitri'])->where('payment_active',$data['payment_active'])->first();
        if($select_payment){
            Session::put('message','Đã có hóa đơn.');
            $manage = view('payment')->with('payment',$ds_payment);
            return view('layout')->with('payment',$manage);
        }
        elseif($data['payment_total'] == 0)
        {
            Session::put('message','Chưa order món nào.');
            return Redirect::to('/customer');

        }else
        {
            Db::table('tbl_payment')->insert($data);  
            $manage = view('payment')->with('payment',$ds_payment);
            return view('layout')->with('payment',$manage);
        }
       
=======
>>>>>>> Stashed changes
    }

    public function create()
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        return view('order_add');
    }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'customer_id' =>'required',
    //         'menu_id' =>'required'
    //     ]);
    //     $add_order = new Order;
    //     $add_order->customer_id = $request->customer_id;
    //     $add_order->menu_id = $request->menu_id;
    //     $add_order->so_luong = $request->so_luong;
    //     $add_order->ghi_chu = $request->ghi_chu;
    //     $add_order->tong_tien = $request->tong_tien;
    //     $n = $add_order->save();
    //     if ($n > 0)
    //         return redirect()->back()->with('alert', 'Order thành công');
    //     else
    //         return redirect()->back()->with('alert', 'Order không thành công');
    // }
=======
=======
>>>>>>> Stashed changes
        
        $dsOrder = DB::table('order')->get();
        return view('order_add', ['dsOrder' => $dsOrder]);
    }
>>>>>>> Stashed changes

    public function order_add($id)
    {
    
        $cus_id=DB::table('customer')->where('id',$id)->get();
        $cus= view('order_add')->with('add_order',$cus_id);
        return view('layout')->with('order_add',$cus);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_id = DB::table('order')->where('customer_id',$id)->get();
        $or = view('order_view')->with('view_order', $show_id);
        return view('layout')->with('order_view', $or);
    }

    public function view_add(Request $request,$id)
    {
        $data = array();
        $data['customer_id'] = $id;
        $data['menu_id'] = $request->menu_id;
        $data['ghi_chu'] = $request->ghi_chu;
        $data['so_luong'] = $request->so_luong;
        $data['tong_tien'] = $request->tong_tien;
        $n = DB::table('order')->insert($data);
        if ($n) {
            Session::put('message', 'them order thanh cong');
            return Redirect::to('order/view/'.$id);
        } else {
            Session::put('message', 'Them order không thành công');
            return view('order_add');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsCustomer=DB::table('customer')->get();
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
