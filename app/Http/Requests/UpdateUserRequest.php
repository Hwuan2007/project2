<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|email|unique:user,email',
            'password' => 'required|max:10|confirmed',
            'password_confirmation' => 'required',
            'username' => 'required|max:20',
            'user_phonenumber' => 'required|numeric|unique:user,user_phonenumber',
            'user_address' => 'required|max:11',
            'role_id' => 'required',
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
        ];
    }
    public function attributes(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Confirm Mật khẩu',
            'password_confirmation' => 'Mật khẩu',
            'username' => 'Tên người dùng',
            'user_phonenumber' => 'Số điện thoại',
            'user_address' => 'Địa chỉ',
            'role_id' => 'Phân quyền',
        ];
    }
}
