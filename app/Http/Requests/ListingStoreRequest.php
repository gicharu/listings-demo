<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'bedrooms' => 'required|integer',
            'baths' => 'required|integer',
            'rating' => 'required|integer',
            'amount' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'listing_type' => 'required|integer',
            'listing_status' => 'required|integer'
        ];
    }
}
