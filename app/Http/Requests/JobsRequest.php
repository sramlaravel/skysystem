<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest  extends FormRequest
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

            'title_en' => 'required|string|max:500',
            'title_ar' => 'required|string|max:500',
            'requirements_ar' => 'required|string|max:2000',
            'requirements_en' => 'required|string|max:2000',
            'location_ar' => 'required|string|max:100',
            'location_en' => 'required|string|max:100',

            'image' => 'required_without:id|mimes:jpg,jpeg,png|max:10048',



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
