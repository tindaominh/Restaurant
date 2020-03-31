<?php

namespace App\Http\Controllers;

use App\customer;
use App\Http\Requests\OrderRequest;
use App\menu;
use App\order;
use App\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController1 extends Controller
{
    public function index()
    {
        $order= DB::table('order')->orderBy('id','asc')->get();
        $order1 = DB::table('order')->where('customer_id', 'asc')->get();
        return view('order',['order'=>$order]);
    }

    public function select_order($id)
    {   
        $list_order = DB::table('order')->where('customer_id',$id)
        ->join('menu','menu.id','=','order.menu_id')->get();
        $list_order2 = DB::table('order')->where('customer_id',$id)->first();
        if($list_order2)
        {
            $manage = view('order_list')->with('list_order',$list_order);
            return view('layout')->with('order_list',$manage);
        }else
        {
            return view('/customer');
        }
    }

    public function show($id)
    {
        $order = DB::table('order')->where('id', $id)->get();
        return view('order_view', ['order' => $order]);
    }

    // public function view_tong($id)
    // {

    //     $order =DB::table('order')->where('customer_id',$id)->get();
    //     $customer=DB::table('customer')->where('id',$id)->first();
    //     $total=0;
    //     foreach ($order as $key) {
    //         $x = $key->so_luong * $key->tong_tien;
    //         $total = $total + $x;
    //     }
    //     $data=new payment;
    //     $data->payment_total = $total;
    //     $data->customer_id = $id;
    //     $data->payment_active = 1;
    //     $ds_payment = DB::table('tbl_payment')->where('customer_id', $id)->take(1)->get();
    //     $select_payment = DB::table('tbl_payment')->where('customer_id', $id)->first();
    //     if ($select_payment) {
    //         $data->save();
    //         return view('customer_view', ['ds_payment' => $ds_payment, 'order' => $order, 'customer' => $customer]);
    //     } 
    //     else
    //     {
    //         return redirect('customer/them/'.$id)->with('alert_error','Chọn vị trí và số bàn');
    //     }
    // }

    public function view_tong($id)
    {

        $order = DB::table('order')->where('customer_id', $id)->get();
        $customer = DB::table('customer')->where('id', $id)->get();
        $total = 0;
        foreach ($order as $key) {
            $x = $key->so_luong * $key->tong_tien;
            $total = $total + $x;
        }
        $data = new customer;
        $data->tong_tien = $total;
        $data->id = $id;
        $data->vi_tri = $customer->vi_tri;
        $data->so_ban = $customer->so_ban;
        $data->trang_thai = 1;
        $n=$data->save();
        if ($n>0) {
            return view('customer_view', ['order' => $order, 'customer' => $customer]);
        } 
        else
        {
            return redirect('customer/them/'.$id)->with('alert_error','Chọn vị trí và số bàn');
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
    }

    public function create($id)
    {
        $menu = DB::table('tbl_menu')->where('id',$id)->get();
        return view('order_add',['menu'=>$menu]);
    }
    
    public function post_addOrder(OrderRequest $request, $id)
    {
        $validated= $request->validated();
        $data = new order;
        $data->customer_id = $request->customer_id;
        $data->menu_id = $request->menu_id;
        $data->so_luong = $request->so_luong;
        $data->ghi_chu = $request->ghi_chu;
        $data->tong_tien = $request->tong_tien;
        $n=$data->save();
        if ($n > 0)
            return redirect('/order')->with('alert', 'Thêm order thành công');
        else
            return back()->with('alert_error', 'Order không thành công');
    }


    public function view_payment($id)
    {
        $order=order::where('customer_id',$id)->get();
        return view('payment1',['order'=>$order]);
    }


    public function order_add($id)
    {
    
        $cus_id=DB::table('customer')->where('id',$id)->get();
        $cus= view('order_add')->with('add_order',$cus_id);
        return view('layout')->with('order_add',$cus);
       
    }

    
    

    // public function view_add(Request $request,$id)
    // {
    //     $data = array();
    //     $data['customer_id'] = $id;
    //     $data['menu_id'] = $request->menu_id;
    //     $data['ghi_chu'] = $request->ghi_chu;
    //     $data['so_luong'] = $request->so_luong;
    //     $data['tong_tien'] = $request->tong_tien;
    //     $n = DB::table('order')->insert($data);
    //     if ($n) {
    //         Session::put('message', 'them order thanh cong');
    //         return Redirect::to('order/view/'.$id);
    //     } else {
    //         Session::put('message', 'Them order không thành công');
    //         return view('order_add');
    //     }
    // }

   
    public function edit($id)
    {
        $data['order']= order::where('id',$id)->get();
        $data['customer']= customer::all();
        return view('order_edit',$data);
    }


    public function update(OrderRequest $request, $id)
    {
        
        $data= order::find($id);
        $data->customer_id = $request->get('customer_id');
        $data->menu_id = $request->get('menu_id');
        $data->so_luong = $request->get('so_luong');
        $data->ghi_chu = $request->get('ghi_chu');
        $data->tong_tien = $request->get('tong_tien');
        $n= $data->save();
        if ($n > 0)
            return redirect('order')->with('alert', 'Update thành công');
        else
            return back()->with('alert_error', 'Update không thành công');
    }

    
    public function destroy($id)
    {
        order::find($id)->delete();
        return back()->with('alert', 'Delete thành công');
    }
}
