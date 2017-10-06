<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
        // 通用的判断条件
        $rules = [];
        $rules['description'] = 'required|max:255';
        $rules['order'] = 'integer';

        // 根据不同的场景进行不同的判定
        if ($this->route()->action['as'] != 'adminCategorySave') {
            // 其他情况
            $rules['title'] = [
                'required',
                Rule::unique('categories')->ignore($this->route('category')->id),
                'max:255',
            ];
        } else {
            // 新增的时候
            $rules['title'] = 'required|unique:categories|max:255';
        }

        return $rules;
    }
}
