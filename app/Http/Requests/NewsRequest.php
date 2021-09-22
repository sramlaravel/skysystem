<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
// 'title_ar' => $request->get('title_ar'),

            'title_en' => 'required|string|max:500',
            'title_ar' => 'required|string|max:500',
            'news_img' => 'required_without:id|mimes:jpg,jpeg,png|max:10048',

            'description_ar'   => 'required|string|max:5000',

            'description_en'   => 'required|string|max:5000',
        ];
    }


    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
            'news_desc.string' => 'العنوان لابد ان يكون حروف او حروف وارقام ',
            'news_title.string'  =>'الاسم لابد ان يكون حروف او حروف وارقام ',
            'news_img.max ' => 'حجم الصوره يجب ان يكون اصغر 10 ميجا ',
            'news_img.required_without' => 'الصوره مطلوبه الرجاء تحميل الصوره',



        ];
    }

}
