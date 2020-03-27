<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class APIOrderController extends Controller
{
    public function index()
    {
        return order::all();
    }

    public function show($id)
    {
        return order::find($id);
    }

    public function store(Request $request)
    {
        $order = order::create($request->all());
        return response()->json($order, 201);
    }

    public function update(Request $request)
    {
        $order = $request->all();
        $order_old = order::find($order["id"]);
        if (empty($order_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $order_old->update($request->all());
            return response()->json($order_old, 200);
        }
    }
    public function delete(Request $request)
    {
        $order = $request->all();
        $order_old = order::find($order["id"]);
        if (empty($order_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $kq = $order_old->delete();
            return response()->json($kq, 204);
        }
    }
}
