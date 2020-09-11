<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBedroomPost extends FormRequest
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
            'nro' => ['required', 'numeric'],
            'nro_beds' => ['required', 'numeric'],
            'size_beds' => ['required'],
            'floor' => ['required', 'numeric'],
            'is_bath' => ['required', 'boolean'],
            'price' => ['required', 'numeric', 'int']

        ];
    }
}
