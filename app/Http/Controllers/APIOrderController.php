<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

/**
 * @group Order management
 *
 * APIs for managing Order
 */
class APIOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(order::get(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($order, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = order::create($request->all());
        return  response()->json($order, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $order->update($request->all());
        return  response()->json($order, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $order = order::find($id);
        if (is_null($order)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $order->delete();
        return  response()->json(null, 204);
    }
}
