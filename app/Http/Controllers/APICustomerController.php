<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

class APICustomerController extends Controller
{
    public function index()
    {
        return customer::all();
    }

    public function show($id)
    {
        return customer::find($id);
    }

    public function store(Request $request)
    {
        $customer = customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function update(Request $request)
    {
        $customer = $request->all();
        $customer_old = customer::find($customer["id"]);
        if (empty($customer_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $customer_old->update($request->all());
            return response()->json($customer_old, 200);
        }
    }
    public function delete(Request $request)
    {
        $customer = $request->all();
        $customer_old = customer::find($customer["id"]);
        if (empty($customer_old))
            return response()->json(array("Ma_loi" => -1, "Noi_dung" => "Menu không tồn tại"), 200);
        else {
            $kq = $customer_old->delete();
            return response()->json($kq, 204);
        }
    }
}
