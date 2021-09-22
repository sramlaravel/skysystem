<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointRequest extends FormRequest
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
            'name_point' => 'required|string|max:100',
            'phone' =>'required|max:100' ,
            'fax' =>'required|max:100' ,
            'city_id'=>'required|exists:cities,id',
            'desc_ar'   => 'required|string|max:500',
            'country_id'=>'required|exists:countries,id',


        ];
    }


    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'max'  => 'هذا الحقل طويل',
             'city_id.exists'  => 'من فضلك قم بختيار المدينه  ',
            'country_id.exists'  => 'من فضلك قم بختيار الدوله ',
            'email.email' => 'ضيغه البريد الالكتروني غير صحيحه',
            'desc_ar.string' => 'العنوان لابد ان يكون حروف او حروف وارقام ',
            'name_point.string'  =>'الاسم لابد ان يكون حروف او حروف وارقام ',
            'location_type.unique' => 'رقم الهاتف مستخدم من قبل ',



        ];
    }

}
