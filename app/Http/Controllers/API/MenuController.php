<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\menu;
/**
 * @apiGroup Menu
 */
class MenuController extends Controller
{

    /**
     * @apiDefine apiParamMenu
     *
     * @apiParam {String} menu_name  Name of the menu.
     * @apiParam {double} menu_price price of the menu.
     * @apiParam {String} menu_image  image of the menu.
     * @apiParam {integer} menu_active status of the menu.
     */

    /**
     * @apiDefine apiParamMenu_put
     *
     * @apiParam {String} [menu_name]  Name of the menu.
     * @apiParam {double} [menu_price] price of the menu.
     * @apiParam {String} [menu_image]  image of the menu.
     * @apiParam {integer} [menu_active] status of the menu.
     */

    /**
     * @apiDefine apiSuccessMenu
     *
     * @apiSuccess {integer} id <code>id</code> of menu.
     * @apiSuccess {String} menu_name  Name of the menu.
     * @apiSuccess {double} menu_price price of the menu.
     * @apiSuccess {String} menu_image  image of the menu.
     * @apiSuccess {integer} menu_active  status of the menu.
     * 
     */

    /**
     * @apiDefine MenuSuccess
     *
     *  @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "menu_name": "Gà nướng",
     *        "menu_price": 150000,
     *        "menu_image": "ganuong.png",
     *        "menu_active": 1
     *     }
     * 
     */

    /**
     * @apiDefine MenuNotFoundError
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Menu Not Found!"
     *     }
     */

    /**
     * @apiDefine MenuNotFoundError_ID
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Record Not Found!"
     *     }
     */

    /**
     * @api {get} /menu I Get Menu information
     * @apiName getMenu
     * @apiGroup Menu
     * 
     * @apiUse apiSuccessMenu
     *
     * @apiUse MenuSuccess
     *
     * @apiUse MenuNotFoundError
     */
    public function index()
    {
        $menu=menu::get();
        if (is_null($menu)) {
            return response()->json(["error" => "Menu not found!"], 404);
        }
        return response()->json($menu, 200);
    }

    /**
     * @api {get} /menu/{id} II Get Menu ID information
     * @apiName getMenuID
     * @apiGroup Menu
     * 
     * @apiUse apiSuccessMenu
     *
     * @apiUse MenuSuccess
     *
     * @apiUse MenuNotFoundError_ID
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
     * @api {post} /menu III Create new Menu information
     * @apiName postMenu
     * @apiGroup Menu
     * 
     * @apiUse apiParamMenu
     * 
     * @apiUse apiSuccessMenu
     *
     * @apiUse MenuSuccess
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 500 error
     *     
     */

    public function store(Request $request)
    {
        $menu = menu::create($request->all());
        return  response()->json($menu, 201);
    }

    /**
     * @api {put} /menu/{id} IV Modify Menu information
     * @apiName putMenu
     * @apiGroup Menu
     *
     * @apiUse apiParamMenu_put
     * 
     * @apiUse apiSuccessMenu
     *
     * @apiUse MenuSuccess
     *
     * @apiUse MenuNotFoundError_ID
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
     * @api {delete} /menu/{id} V Delete Menu information
     * @apiName deleteMenu
     * @apiGroup Menu
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiUse MenuNotFoundError_ID
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