<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
session_start();

class MenuController extends Controller
{
    public function all_menu()
    {
        $menu = DB::table('tbl_menu')->get();
        $manager_menu = view('menu')->with('all_menu',$menu);
        return view('layout')->with('menu',$manager_menu);
    }
}
