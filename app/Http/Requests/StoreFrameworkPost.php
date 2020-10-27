<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFrameworkPost extends FormRequest
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
            'name'=>'required|min:3|max:120;',
            'version'=>'required|min:2|max:120;',
            'programming_language'=>'required|min:1|max:120;',
            'multi_platform'=>'required|min:1|max:120;',
            'mobile_web_development'=>'required|min:1|max:120;',
            'description'=>'required|min:3|max:1000;',
            'category_id'=>'required|min:1|max:1000;',
        ];
    }
}
