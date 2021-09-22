<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobsRequest  extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //admin guard
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [

            'title' => 'required|string|max:400',
            'requirements' => 'required|string|max:2000',
            'location' => 'required|string|max:100',

            'image' => 'nullble:id|mimes:jpg,jpeg,png|max:10048',


        ];
    }

    public function messages()
    {
        return [
            'required_without'=>'الصوره مطلوبه',
            'required' => 'هذا الحقل مطلوب',
            'in' => 'القيم المدخلة غير صحيحة ',
            'title.string' => 'اسم العنوان  لابد ان يكون احرف',
            'location.string' => 'اسم المودل  لابد ان يكون احرف    ',

            'image.max' => 'الصورة هذه لا يزيد حجمها عن 10 ميجا بايت  ',
            'title.max'=>'وصف العنوان يزيد عن 400 حرف اخي العزيز اختصر الموضوع',
             'requirements.string'=>'عزيزي لازم ان متطلبات الوظيفه لا  بتعدى 2000 احرف'
        ];
    }
}
