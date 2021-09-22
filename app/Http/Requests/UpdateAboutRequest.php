<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest  extends FormRequest
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

            'title_ar' => 'required|string|max:50',
            'title_en' => 'required|string|max:50',
            'description_ar' => 'required|string|max:1000',
            'description_en' => 'required|string|max:1000',
            'image' => 'nullable:id|mimes:jpg,jpeg,png|max:15048',



        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'title_ar.string' => 'اسم العنوان  لابد ان يكون احرف',
            'title_en.string' => 'اسم العنوان  لابد ان يكون احرف',
            'description_ar.max' => 'العنوان  لابد الا يزيد عن 100 احرف ',
            'description_en.max' => 'العنوان  لابد الا يزيد عن 100 احرف ',
            'image.max' => 'الصورة هذه لا يزيد حجمها عن 20 ميجا بايت  ',

        ];
    }
}
