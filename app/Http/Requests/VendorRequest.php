<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'logo'        => 'required_without:id|mimes:png,jpg,jpeg',
            'name'        => 'required|string|max:100',
            'address'     => 'required|string|max:100',
            'mobile'      => 'required|max:100|unique:vendors,mobile,'.$this->id,
            'email'       => 'required|nullable|email|unique:vendors,email,'.$this->id,
            'category_id' => 'required|exists:main_categories,id',
            'password'    => 'max:20'

        ];
    }

    public function messages()
    {
        return [
            'required_without'   => 'ادخل الصوره',
            'required'           => 'هذا الحقل مطلوب',
            'max'                => 'هذا الحقل طويل',
            'string'             => 'لابد ان يكون حروف او حروف وارقام',
            'email'              => 'البريد الالكترونى غير صحيح',
            'category_id.exists' => 'القسم غير موجود',
            'email.unique'       => 'هذا البريد موجود من قبل',
            'mobile.unique'      => 'هذا الهاتف موجود من قبل',
        ];
    }
}
