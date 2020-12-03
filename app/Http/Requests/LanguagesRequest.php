<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguagesRequest extends FormRequest
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
            'name'      => 'required|string|max:100',
            'abbr'      => 'required|string|max:10',
            'direction' => 'required|in:rtl,ltr',
           // 'active'    => 'in:1',

        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'string' => 'يجب ان يكون حروف',
            'name.max' => 'لا يجب ان يذيد عن 100 حرف',
            'abbr.max' => 'لا يجب ان يزيد عن 10 حروف',
            'in' => 'هذا الحقل مطلوب',
        ];
    }
}
