<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class APIMenuController extends Controller
{
    public function index()
    {
        return menu::all();
    }

    public function show($id)
    {
        return menu::find($id);
    }

    public function store(Request $request)
    {
        $menu = menu::create($request->all());
        return response()->json($menu, 201);
    }

    public function update(Request $request)
    {
        $menu = $request->all();
        $menu_old = menu::find($menu["id"]);
        if (empty($menu_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $menu_old->update($request->all());
            return response()->json($menu_old, 200);
        }
    }
    public function delete(Request $request)
    {
        $menu = $request->all();
        $menu_old = menu::find($menu["id"]);
        if (empty($menu_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $kq = $menu_old->delete();
            return response()->json($kq, 204);
        }
    }
}
