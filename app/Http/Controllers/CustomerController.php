<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use App\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
=======
use Illuminate\Support\Facades\Session;
>>>>>>> b52558ea69424c1ec142063b2cb6002d89b3f976

class CustomerController extends Controller
{
    public function all_customer()
    {
<<<<<<< HEAD
        $giohang = DB::table('tbl_giohang')->get();
        $khachhang = DB::table('tbl_customer')->get();
        $order = DB::table('tbl_order')->get();
        if($giohang)
        {
            $manager_menu = view('customer')->with('allgiohang',$giohang)->with('khachhang',$khachhang)->with('order',$order);
            return view('layout')->with('customer',$manager_menu);
        }else
        {
            return view('customer');
        }

    }
    public function all_customer2()
    {
        $khachhang = DB::table('tbl_customer')->get();
        $manager_menu = view('customer_all')->with('khachhang',$khachhang);
        return view('layout')->with('customer_all',$manager_menu);
    }

    public function add_khachhang()
    {
        Session::put('note_kh','co du lieu');
        return Redirect::to('/customer');
    }

    public function add_khachhang_new()
    {
        return view('customer_add_new');
    }
    public function save_khachhang(request $request)
    {
        $data = array();
        $data['customer_soban'] = $request->soban;
        $data['order_id'] = '0';
        $data['customer_vitri'] = $request->vitri;
        $data['customer_note'] = '0';
        $dskhachhang = DB::table('tbl_customer')->where('customer_soban',$data['customer_soban'])->where('customer_vitri',$data['customer_vitri'])->where('customer_note','0')->first();
        if($dskhachhang)
        {
            Session::put('message','Vị trí đã có người ngồi.');
            return Redirect::to('/customer');
        }
        DB::table('tbl_customer')->insert($data);
        return Redirect::to('/customer');
        
    }

    public function del_giohang($id)
    {
        DB::table('tbl_giohang')->where('giohang_id',$id)->delete();
        return Redirect::to('/customer');
=======
        $dsCustomer= DB::table('customer')->where('trang_thai','1')->get();
        return view('customer',['dsCustomer' =>$dsCustomer]);   
>>>>>>> b52558ea69424c1ec142063b2cb6002d89b3f976
    }

    public function create()
    {
        return view('customer_add');
    }

    public function add_giohang($id)
    {
        $select_menu = DB::table('tbl_menu')->where('menu_id',$id)->first();
        $select_giohang = DB::table('tbl_giohang')->where('sanpham_id',$id)->first();
        $data = array();
        $data['sanpham_id'] = $id;
        $data['giohang_name'] = $select_menu->menu_name;
        if($select_giohang)
        {
            $data['giohang_soluong'] = $select_giohang->giohang_soluong + 1;
            DB::table('tbl_giohang')->where('giohang_id',$select_giohang->giohang_id)->update($data);
            return Redirect::to('/customer');
        }
        else
        {
            $data['giohang_soluong'] = '1';
            $data['giohang_gia'] = $select_menu->menu_price;
            $data['giohang_image'] = $select_menu->menu_image;
            $add_giohang = DB::table('tbl_giohang')->insert($data);
            if($add_giohang)
            {
                Session::put('message','Thêm menu thành công.');
                return Redirect::to('/customer');
            }
        }
      
    }

    public function add_cart($id)
    {
        $sql_giohang = DB::table('tbl_giohang')->get();
        $sql_giohang2 = DB::table('tbl_giohang')->first();
        if($sql_giohang2)
        {
            $data = array();
            $data['customer_id'] = $id;
            $data['order_ma'] = rand(0,999);
            foreach($sql_giohang as $row){
                $data['menu_id'] = $row->sanpham_id;
                $data['menu_soluong'] = $row->giohang_soluong;
                $data['menu_price'] = $row->giohang_gia;
                DB::table('tbl_order')->insert($data);
            }
            Session::put('message','Order thành công.');
            DB::table('tbl_giohang')->delete();
            return Redirect::to('/customer'); 
        }else
        {
            Session::put('message','Giỏ hàng không có sản phẩm.');
            return Redirect::to('/customer'); 
        }
       
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
