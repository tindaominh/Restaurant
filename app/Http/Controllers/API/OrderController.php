<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
/**
 * @apiGroup Order
 */
class OrderController extends Controller
{
    /**
     * @apiDefine apiParamOrder
     *
     * @apiParam {integer} customer_id  <code>id</code> of customer.
     * @apiParam {integer} menu_id <code>id</code> of menu.
     * @apiParam {integer} so_luong  number of the menu.
     * @apiParam {String} ghi_chu  note for order.
     * @apiParam {double} tong_tien   Total of the menu.
     */

    /**
     * @apiDefine apiParamOrder_put
     *
     * @apiParam {integer} [customer_id]  <code>id</code> of customer.
     * @apiParam {integer} [menu_id] <code>id</code> of menu.
     * @apiParam {integer} [so_luong]  number of the menu.
     * @apiParam {String} [ghi_chu]  note for order.
     * @apiParam {double} [tong_tien]   Total of the menu.
     */

    /**
     * @apiDefine apiSuccessOrder
     *
     * @apiSuccess {integer} id <code>id</code> of order.
     * @apiSuccess {integer} customer_id  <code>id</code> of customer.
     * @apiSuccess {integer} menu_id <code>id</code> of menu.
     * @apiSuccess {integer} so_luong  number of the menu.
     * @apiSuccess {String} ghi_chu  note for order.
     * @apiSuccess {double} tong_tien   Total of the menu.
     * 
     */

    /**
     * @apiDefine OrderSuccess
     *
     *  @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "customer_id": 1,
     *       "menu_id": 1,
     *       "so_luong": 2,
     *       "ghi_chu": "Chưa ghi chú",
     *       "tong_tien": 150000
     *     }
     * 
     */

    /**
     * @apiDefine OrderNotFoundError
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Order Not Found!"
     *     }
     */

    /**
     * @apiDefine OrderNotFoundError_ID
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Record Not Found!"
     *     }
     */

    /**
     * @api {get} /order I Get Order information
     * @apiName getOrder
     * @apiGroup Order
     * 
     * @apiUse apiSuccessOrder
     *
     * @apiUse OrderSuccess
     *
     * @apiUse OrderNotFoundError
     */
    public function index()
    {
        return response()->json(order::get(), 200);
    }

    /**
     * @api {get} /order/{id} II Get Order ID information
     * @apiName getOrderID
     * @apiGroup Order
     * 
     * @apiUse apiSuccessOrder
     *
     * @apiUse OrderSuccess
     *
     * @apiUse OrderNotFoundError_ID
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
     * @api {post} /order III Create new Order information
     * @apiName postOrder
     * @apiGroup Order
     * 
     * @apiUse apiParamOrder
     * 
     * @apiUse apiSuccessOrder
     *
     * @apiUse OrderSuccess
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 500 error
     *     
     */
    public function store(Request $request)
    {
        $order = order::create($request->all());
        return  response()->json($order, 201);
    }

    /**
     * @api {put} /order/{id} IV Modify Order information
     * @apiName putOrder
     * @apiGroup Order
     *
     *  @apiUse apiParamOrder_put
     * 
     * @apiUse apiSuccessOrder
     *
     * @apiUse OrderSuccess
     *
     * @apiUse MenuNotFoundError_ID
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
     * @api {delete} /order/{id} V Delete Menu information
     * @apiName deleteOrder
     * @apiGroup Order
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiUse OrderNotFoundError_ID
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
