<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStudentRequest extends FormRequest
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
            //personal detail
            'nameth' => 'required',
            'lastname_th' => 'required',
            'nameen' => 'required',
            'lastname_en' => 'required',
            'ybirth' => 'required',
            'origin' => 'required',
            'national' => 'required',
            'religion' => 'required',
            'mo1' => 'required|digits:2',
            'mo2' => 'required|digits:4',
            'mo3' => 'required|digits:4',
            'email' => 'required',
            'em_address' => 'required',
            'em_tel1' => 'required|digits:2',
            'em_tel2' => 'required|digits:4',
            'em_tel3' => 'required|digits:4',

            //study detail
            'graduate' => 'required',
            'year_end' => 'required',
            'gfrom' => 'required',
            'branch' => 'required',
            'gpa' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'กรอกช่องที่มีเครื่องหมายดอกจัน',
            'mo1.digits' => 'เบอร์มือถือช่องแรกกรอกไม่ครบ',
            'mo2.digits' => 'เบอร์มือถือช่องสองกรอกไม่ครบ',
            'mo3.digits' => 'เบอร์มือถือช่องสามกรอกไม่ครบ',
            'em_tel1.digits' => 'เบอร์มือถือฉุกเฉินช่องแรกกรอกไม่ครบ',
            'em_tel2.digits' => 'เบอร์มือถือฉุกเฉินช่องสองกรอกไม่ครบ',
            'em_tel3.digits' => 'เบอร์มือถือฉุกเฉินช่องสามกรอกไม่ครบ'
        ];
    }
}
