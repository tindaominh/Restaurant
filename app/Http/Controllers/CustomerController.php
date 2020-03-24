<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');   
    }

    public function create()
    {
        return view('customer_add');
    }


    public function store(Request $request)
    {
        $add_customer = new Customer;
        $add_customer->so_ban = $request ->so_ban;
        $add_customer->vi_tri = $request->vi_tri;
        $add_customer->trang_thai = $request->trang_thai;
        $add_customer->tong_tien= $request->tong_tien;
        $n = $add_customer->save();
        if ($n > 0)
            return redirect()->back()->with('alert', 'Thêm thành công');
        else
            return redirect()->back()->with('alert', 'Thêm không thành công');
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
