<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientsRequest extends Request
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
            'name'=>'required',
            'site_web'=>'required',
            'address'=>'required',
            'name_contact'=>'required',
            'office'=>'required',
            'email'=>'required',
            'phone'=>'required|Numeric',
            'user_id'=>'required',
            'status'=>'required'
           
        ];
    }
}
