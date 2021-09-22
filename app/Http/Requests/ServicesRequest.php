<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest  extends FormRequest
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

            'title' => 'required|string|max:100',
            'title_desc' => 'required|string|max:400',
            'model' => 'required|string|max:10',
            'description' => 'required|string|max:2000',
            'image' => 'required_without:id|mimes:jpg,jpeg,png|max:15048',
          //  'statu' => 'required|in:1',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'in' => 'القيم المدخلة غير صحيحة ',
            'title.string' => 'اسم العنوان  لابد ان يكون احرف',
            'title.max' => 'العنوان  لابد الا يزيد عن 100 احرف ',
            'image.max' => 'الصورة هذه لا يزيد حجمها عن 20 ميجا بايت  ',
            'title_desc.max'=>'وصف العنوان يزيد عن 400 حرف اخي العزيز اختصر الموضوع'
        ];
    }
}
