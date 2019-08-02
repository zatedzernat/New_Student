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
            'mobile' => 'required|size:11',
            'email' => 'required',
            'line' => 'required',
            'facebook' => 'required',
            'contact' => 'required',
            'em_address' => 'required',
            'em_tel' => 'required|size:11',

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
            'required' => 'กรอกช่องที่มีเครื่องหมายดอกจันหรือ required (:attribute)',
            'size' => 'กรอกเบอร์โทรศัพท์ให้ถูกต้อง (:attribute)'
        ];
    }

    public function attributes()
    {
        return [
            'nameth' => 'ชื่อ',
            'lastname_th' => 'นามสกุล',
            'nameen' => 'Name',
            'lastname_en' => 'Surname',
            'ybirth' => 'ปีเกิด',
            'origin' => 'สัญชาติ',
            'national' => 'เชื้อชาติ',
            'religion' => 'ศาสนา',
            'mobile' => 'โทรศัพท์มือถือ',
            'email' => 'E-mail',
            'line' => 'Line ID',
            'facebook' => 'Facebook',
            'contact' => 'ผู้ติดต่อกรณีฉุกเฉิน',
            'em_address' => 'ที่อยู่ติดต่อฉุกเฉิน',
            'em_tel' => 'เบอร์โทรกรณีฉุกเฉิน',

            'graduate' => 'วุฒิการศึกษา',
            'year_end' => 'ปีที่จบ',
            'gfrom' => 'สถาบันที่สำเร็จการศึกษา',
            'branch' => 'สาขาวิชาเอก',
            'gpa' => 'เกรดเฉลี่ยสะสม',

        ];
    }

}
