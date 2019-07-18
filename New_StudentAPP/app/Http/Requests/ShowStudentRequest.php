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
            'required' => 'กรอกเลขให้ครบ (:attribute)',
            'idno1.digits'    => 'ช่องแรกกรอกไม่ครบ',
            'idno1.digits'    => 'ช่องแรกกรอกไม่ครบ',
            'idno2.digits'    => 'ช่องสองกรอกไม่ครบ',
            'idno3.digits'    => 'ช่องสามกรอกไม่ครบ',
            'idno4.digits'    => 'ช่องสี่กรอกไม่ครบ',
            'idno5.digits'    => 'ช่องห้ากรอกไม่ครบ'
        ];
    }
}
