<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\payment;

/**
 * @apiGroup Payment
 */
class PaymentController extends Controller
{
    /**
     * @apiDefine apiParam
     *
     * @apiParam {integer} customer_id  <code>id</code> of customer.
     * @apiParam {integer} customer_soban table number of the customer.
     * @apiParam {integer} customer_vitri  number of the table of the customer.
     * @apiParam {integer} menu_id  <code>id</code> of menu.
     * @apiParam {double} payment_total  Total price of the customer.
     * @apiParam {integer} payment_active   status of the payment.
     */

    /**
     * @apiDefine apiParam_put
     *
     * @apiParam {integer} [customer_id]  <code>id</code> of customer.
     * @apiParam {integer} [customer_soban] table number of the customer.
     * @apiParam {integer} [customer_vitri]  number of the table of the customer.
     * @apiParam {integer} [menu_id]  <code>id</code> of menu.
     * @apiParam {double} [payment_total]  Total price of the customer.
     * @apiParam {integer} [payment_active]   status of the payment.
     */

    /**
     * @apiDefine apiSuccess
     *
     * @apiSuccess {integer} payment_id <code>id</code> of payment.
     * @apiSuccess {integer} customer_id  <code>id</code> of customer.
     * @apiSuccess {integer} customer_soban table number of the customer.
     * @apiSuccess {integer} customer_vitri  number of the table of the customer.
     * @apiSuccess {integer} menu_id  <code>id</code> of menu.
     * @apiSuccess {double} payment_total  Total price of the customer.
     * @apiSuccess {integer} payment_active   status of the payment.
     */

    /**
     * @apiDefine PaymentSuccess
     *
     *  @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *     {
     *        "payment_id": 35,
     *        "customer_id": 1,
     *        "customer_soban": 5,
     *        "customer_vitri": 1,
     *        "menu_id": 2,
     *        "payment_total": "150000",
     *        "payment_active": 1
     *     }
     */

    /**
     * @apiDefine PaymentNotFoundError
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Payment Not Found!"
     *     }
     */

    /**
     * @apiDefine PaymentNotFoundError_ID
     *
     * @apiErrorExample Error-Response:
     *     HTTP/1.1 404 Not Found
     *     {
     *       "error": "Record Not Found!"
     *     }
     */

    /**
     * @api {get} /payment I Get Payment information
     * @apiName getPayment
     * @apiGroup Payment
     * 
     * @apiUse apiSuccess
     *
     * @apiUse PaymentSuccess
     *
     * @apiUse CustomerNotFoundError
     */
    public function index()
    {
        return response()->json(payment::get(), 200);
    }

    /**
     * @api {get} /payment/{id} II Get Payment ID information
     * @apiName getPaymentID
     * @apiGroup Payment
     * 
     * @apiUse apiSuccess
     *
     * @apiUse PaymentSuccess
     *
     * @apiUse PaymentNotFoundError_ID
     */
    public function show($id)
    {
        $payment = payment::find($id);
        if (is_null($payment)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($payment, 200);
    }

    /**
     * @api {post} /payment III Create new Payment information
     * @apiName postPayment
     * @apiGroup Payment
     * 
     * @apiUse apiParam
     * 
     * @apiUse apiSuccess
     *
     * @apiUse PaymentSuccess
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
     * @api {put} /payment/{id} IV Modify Payment information
     * @apiName putPayment
     * @apiGroup Payment
     *
     * @apiUse apiParam_put
     * 
     * @apiUse apiSuccess
     *
     * @apiUse PaymentSuccess
     *
     * @apiUse PaymentNotFoundError_ID
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
     * @api {delete} /payment/{id} V Delete Payment information
     * @apiName deletePayment
     * @apiGroup Payment
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 204 No Content
     *
     * @apiUse PaymentNotFoundError_ID
     */
    public function delete(Request $request, $id)
    {
        $payment = payment::find($id);
        if (is_null($payment)) {
            return response()->json(["message" => "Record not found!!"], 404);
        }
        $payment->delete();
        return  response()->json(null, 204);
    }
}