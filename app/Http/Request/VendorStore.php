<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class VendorStore extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|digits_between:6,15',
            'street' => 'required|string',
            'street_number' => 'required|string',
            'house_number' => 'nullable|string',
            'city' => 'required|string',
            'postcode' => 'required|string',
            'country' => 'required|string'
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
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'email.required' => 'Email is required',
            'phone_number.required' => 'Phone number is required',
            'street.required' => 'Street is required',
            'street_number.required' => 'Street number is required',
            'city.required' => 'City is required',
            'postcode.required' => 'Postcode is required',
            'country.required' => 'Country is required'
        ];
    }
}
