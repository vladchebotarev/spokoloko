<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VenueBookingRequest extends FormRequest
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
            'book_date' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
            'name' => 'required|max:150',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:1000',
            'venue_id' => 'required|digits_between:1,6',
        ];
    }
}
