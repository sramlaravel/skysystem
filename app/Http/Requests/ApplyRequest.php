<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'name' => 'required|min:10',
            'age'=>'required|min:2|max:2|regex:/^([0-9\s\-\+\(\)]*)$/',
            'degree'=> 'required',
            'email' => 'required|email',
            'phone' => 'required|min:9|regex:/^([0-9\s\-\+\(\)]*)$/ ',
            'address' => 'required',
            'skills' => 'required',
            'cv' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',

//

        ];
    }


    public function messages(){

        return [
            'required'=>  ('messages.required'),
            'max'=> 'هذا الحقل طويل',
            'phone.min'=> 'حقل التلفون قصير جدا يجب ان يكون اقل شي 9 ارقام',
            'cv.required' => 'يجب تحميل السيفي تبعك ومن الافضل ان يكون pdf',
            'cv.max'=> 'السيفي حجمه اكبر من المطلوب يجب ان يكون حجم السيفي لايتجاوز 3 ميجا',
//            'category_id.exists'  => 'القسم غير موجود ',
            'email.email'=> 'ضيغه البريد الالكتروني غير صحيحه',
            'skills.required'=> ' جيب سرد المهاراه او الخبرات التي تخصك عزيز ',
            'name.min'=>'الاسم لابد ان يكون 10 احروف  ',
            'age.min'=>'العمر يجب انكون ارقام وان لا يزيد عن رقمين  ',


            'email '=> 'البريد الالكتروني مستخدم من قبل ',
            'phone'=> 'رقم الهاتف مستخدم من قبل ',
     ];
    }

}
