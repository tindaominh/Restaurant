<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
/**
 * @group Customer management
 *
 * APIs for managing Customer
 */
class APICustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(customer::get(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = customer::find($id);
        if (is_null($customer)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($customer, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @bodyParam id integer required id of customer. Example: 1
     * @bodyParam so_ban integer required number of your table. Example: 1
     * @bodyParam vi_tri integer required position in table. Example: 1
     * @bodyParam trang_thai integer required number of dishes. Example: 1 (Đã thanh toán) or 0 (chưa thanh toán)
     * @bodyParam tong_tien double required price of customer. Example: 50000
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = customer::create($request->all());
        return  response()->json($customer, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @bodyParam id integer required id of customer. Example: 1
     * @bodyParam so_ban integer number of your table. Example: 1
     * @bodyParam vi_tri integer position in table. Example: 1
     * @bodyParam trang_thai integer number of dishes. Example: 1 (Đã thanh toán) or 0 (chưa thanh toán)
     * @bodyParam tong_tien double price of customer. Example: 50000
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = customer::find($id);
        if (is_null($customer)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $customer->update($request->all());
        return  response()->json($customer, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $customer = customer::find($id);
        if (is_null($customer)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $customer->delete();
        return  response()->json(null, 204);
    }
}