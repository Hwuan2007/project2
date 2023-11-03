<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutReceiptRequest extends FormRequest
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
            'username' => 'required|max:20',
            'user_phonenumber' => 'required|numeric|unique:user,user_phonenumber',
            'user_address' => 'required|max:20',
            'note' => 'required|max:255',
            'checkbox' => 'accepted',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute đang trống',
            'max' => ':attribute không được quá :max ký tự',
            'numeric' => ':attribute phải là số',
            'unique' => ':attribute đã trùng',
            'confirmed' => ':attribute đã bị sai',
            'accepted' => 'Bạn chưa đồng ý :attribute',
        ];
    }
    public function attributes(): array
    {
        return [
            'username' => 'Tên người dùng',
            'user_phonenumber' => 'Số điện thoại',
            'user_address' => 'Địa chỉ',
            'note' => 'Ghi chú',
            'checkbox' => 'Điều khoản và Dịch vụ',
        ];
    }
}
