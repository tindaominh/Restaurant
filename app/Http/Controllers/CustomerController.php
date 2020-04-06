<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\Http\Requests\CustomerRequest;
use App\order;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customer')->get();
        return view('customer',['customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = DB::table('customer')->get();
        return view('customer_add', ['customer'=>$customer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $validated = $request->validated();
        $data = new customer;
        $data->order_id = $request->order_id;
        $data->so_ban = $request->so_ban;
        $data->vi_tri = $request->vi_tri;
        $data->trang_thai = $request->trang_thai;
        $data->tong_tien = $request->tong_tien;
        $vitri = $data->where('so_ban', $data->so_ban)->where('vi_tri', $data->vi_tri)->first();
        if ($vitri) {
            return back()->with('alert_error', 'Vui lòng chọn vị trí khác');
        } else {
            $data->save();
            return redirect('/customer')->with('alert', 'Thêm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $customer= DB::table('customer')->where('id',$id)->get();
    //     $order=DB::table('order')->select('customer_id','so_luong','tong_tien')->where('customer_id',$id)->get();

    //     $total=0;
    //     foreach($order as $getorder)
    //     {
    //         $t= $getorder->so_luong * $getorder->tong_tien;
    //         $total += $t;
    //     }
    //     $data = customer::find($id);
    //     $data->tong_tien = $total;
    //     $data->save();
    //     return view('customer_view',['customer'=>$customer]);
    // }

    public function show($id)
    {
        $customer = DB::table('customer')->where('id', $id)->get();
        $order = DB::table('order')->select('customer_id', 'so_luong', 'tong_tien')->where('customer_id', $id)->get();

        $total = 0;
        foreach ($order as $getorder) {
            $t = $getorder->so_luong * $getorder->tong_tien;
            $total += $t;
        }
        $data = customer::find($id);
        $data->tong_tien = $total;
        $data->save();
        return view('customer_view', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function get_bill($id)
    {
        $customer = DB::table('customer')->where('id', $id)->get();
        return view('customer_edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post_bill(CustomerRequest $request, $id)
    {
        $validated = $request->validated();
        $data = new customer;
        $data->so_ban = $request->get('so_ban');
        $data->vi_tri = $request->get('vi_tri');
        $data->trang_thai = $request->get('trang_thai');
        $data->tong_tien = $request->get('tong_tien');
        $n = $data->save();
        if ($n > 0) {
            return redirect('/customer/view/' . $id)->with('alert', 'success');
        } else {
            return back()->with('alert_error', 'fails');
        }
    }

    public function edit($id)
    {
        $customer = DB::table('customer')->where('id', $id)->get();
        return view('customer_edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $validated = $request->validated();
        $data = customer::find($id);
        $data->order_id = $request->get('order_id');
        $data->so_ban = $request->get('so_ban');
        $data->vi_tri = $request->get('vi_tri');
        $data->trang_thai = $request->get('trang_thai');
        $data->tong_tien = $request->get('tong_tien');
        $n = $data->save();
        if ($n > 0) {
            return redirect('/customer/view/'.$id)->with('alert', 'success');
        } else {
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
        customer::find($id)->delete();
        return back()->with('alert', 'success');
    }
}
