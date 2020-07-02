<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'register')
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'email|required',
            'passwd'=>'min:7|confirmed|required',
            'passwd_confirmation'=>'required',
        ];
    }

    public function messages()
    {
        return
        [
        'name.required'=>'名前を入力してください。',
        'email.email'=>'メールアドレスを入力してください。',
        'passwd.min'=>'パスワードは７文字以上です。',
        'passwd.required'=>'パスワードを入力してください。',
        'passwd.confirmed'=>'パスワードが一致しません。',
        'passwd_confirmation.required'=>'パスワードを再度入力してください。',
        ];
    }
}
