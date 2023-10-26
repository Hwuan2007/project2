<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'categories_name' => 'required|max:20|unique:category,categories_name',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute đang trống',
            'max' => ':attribute không được quá :max ký tự',
            'unique' => ':attribute đã trùng',
        ];
    }
    public function attributes(): array
    {
        return [
            'categories_name' => 'Danh mục'
        ];
    }
}
