<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer;
use App\Http\Requests\CustomerRequest;
use App\menu;
use App\order;

class CustomerController1 extends Controller
{
    public function index()
    {
        $data= DB::table('customer')
        ->join('tbl_payment', 'tbl_payment.customer_id','=','customer.id')->get();
        var_dump($data);
        // ->select('customer.id', 'customer.so_ban', 'customer.vi_tri', 'customer.trang_thai', 'tbl_payment.payment_total')->get();
        $customer = DB::table('customer')->get();

        return view('customer',['data'=>$data,'customer'=>$customer]);
    }

    public function all_customer()
    {
        $order= DB::table('order')->select('customer_id','tong_tien')->get();
        $dsorder=array();
        foreach($order as $orders => $item)
        {
            $dsorder[$item->customer_id]= DB::table('customer')->where('id',$item->customer_id)->get();
        }

        DB::table('tablename')->where('column', 'filter')->get();
        $customer = DB::table('customer')->orderBy('created_at', 'desc')->get();
        foreach($customer as $customers)
        {
            $customers->id;
        }
    }

    public function get_addCustomer()
    {
        $data['customer'] = customer::all();
        return view('customer_add',$data);
    }

    public function post_addCustomer(CustomerRequest $request)
    {
        $validated = $request->validated();
        $data = new customer;
        $data->so_ban = $request->so_ban;
        $data->vi_tri = $request->vi_tri;
        $data->trang_thai = $request->trang_thai;
        $data->tong_tien = $request->tong_tien;
        $vitri = $data->where('so_ban', $data->so_ban)
        ->where('vi_tri', $data->vi_tri)->first();
        if($vitri)
        {
            return back()->with('alert_error','Vui lòng chọn vị trí khác');
        }
        else
        {
            $data->save();
            return redirect('/customer')->with('alert','Thêm thành công');
        }
    }

    public function store(Request $request)
    {
        $data =array();
        $data['so_ban'] = $request ->so_ban;
        $data['vi_tri'] = $request->vi_tri;
        $data['trang_thai'] = $request->trang_thai;
        $vitri = DB::table('customer')->where('so_ban', $data['so_ban'])
        ->where('vi_tri', $data['vi_tri'])
        ->where('trang_thai', $data['trang_thai'])->first();
        $data['tong_tien']= $request->tong_tien;
        if ($vitri)
        {
            Session::put('message','chon vi tri khac');
            return view('customer_add');
        }
        else
        {
            DB::table('customer')->insert($data);
            Session::put('message', 'Thêm thành công');
            return view('customer_add');
        }
    }

    public function show($id)
    {
        $payment=DB::table('tbl_payment')->where('customer_id',$id)->get();
        return view('customer_view',['payment'=>$payment]);
    }

    public function edit($id)
    {
        $data['customer']= customer::where('id',$id)->get();
        return view('customer_edit',$data);
    }

    
    public function update(CustomerRequest $request, $id)
    { 
        $data = customer::find($id);
        $data->so_ban = $request->get('so_ban');
        $data->vi_tri = $request->get('vi_tri');
        $data->trang_thai = $request->get('trang_thai');
        $data->tong_tien = $request->get('tong_tien');
        $vitri = $data->where('so_ban', $data->so_ban)
        ->where('vi_tri', $data->vi_tri)->first();
        if($vitri)
        {
            return back()->with('alert_error', 'Vui lòng chọn vị trí khác');
        }
        else
        {
            $data->save();
            return redirect('/order')->with('alert','Lưu thành công');
        }
    }
    
    public function destroy($id)
    {
        customer::find($id)->delete();
        return redirect()->back()->with('alert','Delete thành công');
    }
}