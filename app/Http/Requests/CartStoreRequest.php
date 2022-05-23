<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'productCode' => ['required', 'string', 'max:255', 'unique:users'],
            'itemName' => ['required', 'string', 'max:255'],
            'itemQty' => ['required', 'string', 'max:255'],
            'price' => ['required', 'decimal'],
        ];
    }
}
