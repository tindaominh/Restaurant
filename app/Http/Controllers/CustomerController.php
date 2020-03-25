<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $dsCustomer= DB::table('customer')->where('trang_thai','1')->get();
        return view('customer',['dsCustomer' =>$dsCustomer]);   
    }

    public function create()
    {
        return view('customer_add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'so_ban'=>'required'
        ]);
        $data = array();
        $data['so_ban'] = $request ->so_ban;
        $data['vi_tri'] = $request->vi_tri;
        $data['trang_thai'] = $request->trang_thai;
        $vitri= DB::table('customer')->where('so_ban', $data['so_ban'])
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
            return redirect()->back()->with('alert', 'Thêm thành công');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsCustomer= DB::table('customer')->where('id',$id)->first();
        return view('customer_edit',['dsCustomer'=>$dsCustomer]);
    }

    
    public function update(Request $request, $id)
    {
        
        $data = array();
        $data['so_ban'] = $request->so_ban;
        $data['vi_tri'] = $request->vi_tri;
        $data['trang_thai'] = $request->trang_thai;
        $data['tong_tien'] = $request->tong_tien;
        $n=DB::table('customer')->where('id',$id)->update($data);
        if($n>0)
        {
            return Redirect()->back()->with('alert','Cap nhat thanh cong');
        }
        else
        {
            return Redirect()->back()->with('alert', 'Cap nhat khong thanh cong');
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
        DB::table('customer')->where('id',$id)->delete();
        return redirect()->back()->with('alert','Delete thanh cong');
    }
}
