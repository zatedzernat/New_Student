<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowStudentRequest extends FormRequest
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
            'idno1' => 'required|digits:1',
            'idno2' => 'required|digits:4',
            'idno3' => 'required|digits:5',
            'idno4' => 'required|digits:2',
            'idno5' => 'required|digits:1'
        ];
    }

    public function messages()
    {
        return [
            'idno1.required'    => 'ช่องแรกกรอกไม่ครบ (1)',
            'idno2.required'    => 'ช่องสองกรอกไม่ครบ (4)',
            'idno3.required'    => 'ช่องสามกรอกไม่ครบ (5)',
            'idno4.required'    => 'ช่องสี่กรอกไม่ครบ (2)',
            'idno5.required'    => 'ช่องห้ากรอกไม่ครบ (1)'
        ];
    }
}
