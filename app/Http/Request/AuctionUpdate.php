<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class AuctionUpdate extends FormRequest
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
            'status' => 'required|boolean',
            'price' => 'required|numeric',
            'order_id' => 'required',
            'vendor_id' => 'required'
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() 
    {    
        return [
            'status.required' => 'Auction status is required',
            'price.required' => 'Auction price is required'
        ];
    }
}
