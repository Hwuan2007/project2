<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDrinkRequest extends FormRequest
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
            'drk_name' => 'required|max:50|unique:drink,drk_name',
            'drk_img' => 'required|image',
            'drk_price' => 'required|numeric',
            'drk_description' => 'required|max:255',
            'categories_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute đang trống',
            'max' => ':attribute không được quá :max ký tự',
            'numeric' => ':attribute phải là số',
            'image' => ':attribute phải là dạng ảnh và phải có đuôi là: jpg, jpeg, png, bmp, gif, svg, hoặc webp',
            'unique' => ':attribute đã trùng',
        ];
    }
    public function attributes(): array
    {
        return [
            'drk_name' => 'Đồ uống',
            'drk_img' => 'Ảnh',
            'drk_price' => 'Giá tiền',
            'categories_id' => 'Danh mục',
            'drk_description' => 'Mô tả',
        ];
    }
}
