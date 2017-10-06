<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * 存储 link 的验证器
 * Class StoreLink.
 */
class StoreLink extends FormRequest
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
        $rules['url'] = 'required|max:255';

        // 根据不同的场景进行不同的判定
        if ($this->route()->action['as'] != 'adminLinkSave') {
            // 其他情况
            $rules['title'] = [
                'required',
                Rule::unique('links')->ignore($this->route('link')->id),
                'max:255',
            ];
        } else {
            // 新增的时候
            $rules['title'] = 'required|unique:links|max:255';
        }

        return $rules;
    }
}
