<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'          => ['required', 'string'],
            'last_name'           => ['required', 'string'],
            'birth_date'          => ['required', 'string'],
            'sin'                 => ['required', 'string'],
            'government_id'       => ['required', 'string'],
            'expiry_date'         => ['required', 'string'],
            'phone_number'        => ['required', 'string', 'unique:purchasers'],
            'city_id'             => ['required', 'integer'],
            'country'             => ['required', 'string'],
            'suite'               => ['required', 'string'],
            'address'             => ['required', 'string'],
            'postal_code'         => ['required', 'string'],
            'profession'          => ['required', 'string'],
            'avatar'              => ['mimes:jpg,bmp,png', 'max:500'],
            'about'               => ['nullable', 'string'],
        ];
    }
}
