<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MenuadController extends Controller
{
    public function admin_all_menu()
    {
        $check_key = Session::get('admin_key');
        if($check_key == false)
        {
            Session::put('anhien',null);
            $all_menu = DB::table('tbl_menu')->get();
            $manage = view('admin.all_menu')->with('all_menu',$all_menu);
            return view('admin_layout')->with('admin.all_menu',$manage);
        }else
        {   
            Session::put('anhien','codulieu');
            $all_menu = DB::table('tbl_menu')->get();
            $manage = view('admin.all_menu')->with('all_menu',$all_menu);
            return view('admin_layout')->with('admin.all_menu',$manage);
        }
    }
    public function admin_add_menu()
    {
        $check_key = Session::get('admin_key');
        if($check_key == false)
        {
            Session::put('message','Bạn không có quyền truy cập vào.');
            return view('admin_layout');
        }else
        {
            return view('admin.add_menu');
        }
        
    }
    public function save_menu(request $request)
    {
        $data = array();
        $data['menu_name'] = $request->menu_name;
        $data['menu_price'] = $request->menu_price;
        $data['menu_active'] = $request->menu_active;
        $image = $request ->file('menu_image');
        if($image)
        {
            $path = 'public/fontend/images/';
            $name = $image -> getClientOriginalName();
            $rename = current(explode('.',$name));
            $new_name = $rename.rand(0,999).'.'.$image->getClientOriginalExtension();
            $image->move($path,$new_name);
            $data['menu_image']=$new_name;
            DB::table('tbl_menu')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('/admin-add-menu');
        }else
        {
            Session::put('message','Phải chọn hình ảnh');
            return Redirect::to('/admin-add-menu');
        }
    }

    public function edit_menu($menu_id)
    {
        $check_key = Session::get('admin_key');
        if($check_key == false)
        {
            Session::put('message','Bạn không có quyền truy cập vào.');
            return view('admin_layout');
        }else
        {
            $select_menu = Db::table('tbl_menu')->where('menu_id',$menu_id)->get();
            $manage = view('admin.edit_menu')->with('select_menu',$select_menu);
            Session::put('anhien','true');
            return view('admin_layout')->with('admin.edit_menu',$manage);
        }
           
     
    }

    public function delete_menu($menu_id)
    {   
        $check_key = Session::get('admin_key');
        if($check_key == false)
        {
            Session::put('message','Bạn không có quyền truy cập vào.');
            return view('admin_layout');
        }else
        {
            DB::table('tbl_menu')->where('menu_id',$menu_id)->delete();
            Session::put('message','Xóa menu thành công!');
            return Redirect::to('/admin-all-menu');
        }
    }
    public function edit_menu_select(request $request,$menu_id)
    {
        $data = array();
        $data['menu_name'] = $request->menu_name;
        $data['menu_price'] = $request->menu_price;
        $data['menu_active']= $request->menu_active;
        $image = $request ->file('menu_image');
        if($image)
        {
            $path = 'public/fontend/images/';
            $name = $image -> getClientOriginalName();
            $rename = current(explode('.',$name));
            $new_name = $rename.rand(0,999).'.'.$image->getClientOriginalExtension();
            $image->move($path,$new_name);
            $data['menu_image']=$new_name;
            DB::table('tbl_menu')->where('menu_id',$menu_id)->update($data);
            Session::put('message','Cập nhật thành công');
            return Redirect::to('/admin-all-menu');
        }else
        {
            DB::table('tbl_menu')->where('menu_id',$menu_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('/admin-all-menu');
        }

    }


}
