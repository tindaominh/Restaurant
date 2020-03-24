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
            return Redirect::to('/trang-chu');
        }
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
            return Redirect::to('/trang-chu');
        }
        else{
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác!');
            return Redirect::to('/login');
        }
    }
}
