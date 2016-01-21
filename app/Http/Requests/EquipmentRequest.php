<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EquipmentRequest extends Request
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
            'brand'=>'required',
            'model'=>'required',
            'owner'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'status'=>'required',
            'deliver_date'=>'required',
            'serial_number'=>'required|Numeric'
        ];
    }
}
