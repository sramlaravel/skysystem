<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequests  extends FormRequest
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

            'cur_sell' => 'required',
            'cur_buy' => 'required',
//            'stutes' => 'required',



          //  'statu' => 'required|in:1',

        ];
    }

    public function messages()
    {
        return [
            'required_without'=>'الصوره مطلوبه',
            'required' => 'هذا الحقل مطلوب',
            'in' => 'القيم المدخلة غير صحيحة ',
//            'stutes.string' => 'اسم   لابد ان يكون احرف',
//            'model.string' => 'اسم المودل  لابد ان يكون احرف  انجلبزي ',
//            'logo.max' => 'لوقو هذه لا يزيد حجمها عن 10 ميجا بايت ',
//            'image.max' => 'الصورة هذه لا يزيد حجمها عن 10 ميجا بايت  ',
//            'title.max'=>'وصف العنوان يزيد عن 400 حرف اخي العزيز اختصر الموضوع',
//             'model.max'=>'عزيزي لازم ان المودل لا بتعدى 10 احرف'
        ];
    }
}
