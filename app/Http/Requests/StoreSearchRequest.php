<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSearchRequest extends FormRequest
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
            'user_phonenumber' => 'required|numeric|exists:user,user_phonenumber',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute đang trống',
            'numeric' => ':attribute phải là số',
            'exists' => ':attribute không tồn tại',
            'image' => ':attribute phải là dạng ảnh và phải có đuôi là: jpg, jpeg, png, bmp, gif, svg, hoặc webp',
        ];
    }
    public function attributes(): array
    {
        return [
            'user_phonenumber' => 'Số điện thoại',
        ];
    }
}
