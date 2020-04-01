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