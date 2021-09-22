<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
//
            'title_en' => 'required|string|max:500',
            'title_ar' => 'required|string|max:500',


            'description_ar'   => 'required|string|max:5000',

            'description_en'   => 'required|string|max:5000',

            'news_img' => 'nullable:id|mimes:jpg,jpeg,png|max:10048',



        ];
    }


    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
            'news_desc.string' => 'العنوان لابد ان يكون حروف او حروف وارقام ',
            'news_title.string'  =>'الاسم لابد ان يكون حروف او حروف وارقام ',
            'news_img.max ' => 'حجم الصوره يجب ان يكون اصغر 10 ميجا ',
            'news_img.required_without:id' => 'الصوره مطلوبه الرجاء تحميل الصوره',



        ];
    }

}
