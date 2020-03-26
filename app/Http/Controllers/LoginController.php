<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
session_start();
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $check_login = Session::get('admin_id');
        if($check_login)
        {
            // return Redirect::to('/trang-chu');
            return view('admin_layout');
        }
        return view('login');
        return view('login');
    }
    public function check_login(request $request)
    {
        $user = $request->username;
        $pass = md5($request->password);

        $check = DB::table('tbl_admin')->where('admin_user',$user)->where('admin_pass',$pass)->first();

        if($check)
        {
            Session::put('admin_name',$check->admin_name);
            Session::put('admin_id',$check->admin_id);
            Session::put('admin_key',$check->admin_key);
            // return Redirect::to('login');
            return view('admin_layout');
        }
        else{
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác!');
            return Redirect::to('/login');
        }
    }

    public function log_out()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        Session::put('admin_key',null);
        return Redirect::to('/login');
    }
}
