<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckYear;    

class ValidateYearRequest extends FormRequest
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

            'year' => ['required', 'checkyear'],
        ];
        // ];
        // return [
        //     'year' => [
        //         'required',
        //         'integer',
        //         function ($attribute, $value, $fail) {
        //             if(($value % 400 != 0) && ($value % 4 != 0 && $value % 100 == 0)) {
        //                 return $fail($value . ' Không phải là năm nhuận');
        //             }
        //         }
        //     ]
        // ];
    }

    public function messages()
    {
        return [
            'checkyear' => 'K có năm nhuận',
        ];
    }
}
