<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
        $rules['content'] = 'required';
        $rules['isAllowComment'] = [
            'integer',
            Rule::in([0, 1]),
        ];
        $rules['order'] = [
            'integer',
        ];
        $rules['status'] = [
            'required',
            'integer',
            Rule::in([0, 1]),
        ];
        $rules['categories'] = 'required';
        $rules['categories.*'] = [
            'required',
            'integer',
            'exists:categories,id',
        ];

        // 根据不同的场景进行不同的判定
        if ($this->route()->action['as'] != 'adminArticleSave') {
            // 其他情况
            $rules['title'] = [
                'required',
                Rule::unique('pages')->ignore($this->route('page')->id),
                'max:255',
            ];
        } else {
            // 新增的时候
            $rules['title'] = 'required|unique:links|max:255';
        }

        return $rules;
    }
}
