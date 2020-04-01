<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

/**
 * @group Menu management
 *
 * APIs for managing Menu
 */
class APIMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(menu::get(), 200);
    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = menu::find($id);
        if (is_null($menu)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($menu, 200);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = menu::create($request->all());
        return  response()->json($menu, 201);
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
        $menu = menu::find($id);
        if (is_null($menu)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $menu->update($request->all());
        return  response()->json($menu, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $menu = menu::find($id);
        if (is_null($menu)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $menu->delete();
        return  response()->json(null, 204);
    }
}