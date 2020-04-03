<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customer;
/**
 * @apiGroup Customer
 */
class CustomerController extends Controller
{
    /**
     * @apiDefine apiParamCustomer
     *
     * @apiParam {integer} order_id  <code>id</code> of order.
     * @apiParam {integer} so_ban table number.
     * @apiParam {integer} vi_tri  number of the table.
     * @apiParam {integer} trang_thai  status for customer.
     * @apiParam {double} tong_tien   Total of the customer.
     */

    /**
     * @apiDefine apiParamCustomer_put
     *
     * @apiParam {integer} [order_id]  <code>id</code> of order.
     * @apiParam {integer} [so_ban] table number.
     * @apiParam {integer} [vi_tri]  number of the table.
     * @apiParam {integer} [trang_thai]  status for customer.
     * @apiParam {double} [tong_tien]   Total of the customer.
     */

    /**
     * @apiDefine apiSuccessCustomer
     *
     * @apiSuccess {integer} id <code>id</code> of customer.
     * @apiSuccess {integer} order_id  <code>id</code> of order.
     * @apiSuccess {integer} so_ban table number.
     * @apiSuccess {integer} vi_tri  number of the table.
     * @apiSuccess {integer} trang_thai  status for customer.
     * @apiSuccess {double} tong_tien   Total of the customer.
     * 
     */

    /**
     * @apiDefine CustomerSuccess
     *  @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *       "id": 1,
     *       "order_id": 2,
     *       "so_ban": 2,
     *       "vi_tri": 1,
     *       "trang_thai": 1,
     *       "tong_tien": 450000
     *     }
     * 
     */
    
    /**
     * @apiDefine CustomerNotFoundError
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Customer Not Found!"
     *     }
     */

    /**
     * @apiDefine CustomerNotFoundError_ID
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Record Not Found!"
     *     }
     */

    /**
     * @apiSampleRequest http://localhost:8888/restaurant/api/customer
     * 
     * @api {get} /customer I Get Customer information
     * @apiName getCustomer
     * @apiGroup Customer
     * @apiUse apiSuccessCustomer
     *
     * @apiUse CustomerSuccess
     *
     * @apiUse CustomerNotFoundError
     */

    public function index()
    {
        return response()->json(customer::get(), 200);
    }

    /**
     * @api {get} /customer/{id} II Get Customer ID information
     * @apiName getCustomerID
     * @apiGroup Customer
     * 
     * @apiUse apiSuccessCustomer
     *
     * @apiUse CustomerSuccess
     *
     * @apiUse CustomerNotFoundError_ID
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
     * @api {post} /customer III Create new Customer information
     * @apiName postCustomer
     * @apiGroup Customer
     * 
     * @apiUse apiParamCustomer
     * 
     * @apiUse apiSuccessCustomer
     *
     * @apiUse CustomerSuccess
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 500 error
     *     
     */
    public function store(Request $request)
    {
        $customer = customer::create($request->all());
        return  response()->json($customer, 201);
    }

    /**
     * @api {put} /customer/{id} IV Modify Customer information
     * @apiName putCustomer
     * @apiGroup Customer
     *
     * @apiUse apiParamCustomer_put
     * 
     * @apiUse apiSuccessCustomer
     *
     * @apiUse CustomerSuccess
     *
     * @apiUse CustomerNotFoundError_ID
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
     * @api {delete} /customer/{id} V Delete Customer information
     * @apiName deleteCustomer
     * @apiGroup Customer
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiUse CustomerNotFoundError_ID
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