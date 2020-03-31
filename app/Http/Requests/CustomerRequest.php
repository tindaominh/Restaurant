<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\customer;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'so_ban'=>'required',
            'vi_tri'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'so_ban.required' => "Nhập số bàn",
            'vi_tri.required' => "Nhập vị trí"
        ];
    }
}
