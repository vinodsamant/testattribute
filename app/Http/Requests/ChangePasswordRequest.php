<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\ApiFormRequest;

class ChangePasswordRequest extends ApiFormRequest
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
            'current_password' => [
                REQUIRED,
            ],
                        
            'new_password' => [
                REQUIRED,
                'min:8',
                'max:16',
                'regex:/^(?=.*\d)(?=.*[A-Z])(?!.*[^a-zA-Z0-9@$!%*#?&^]).*$/',
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function formatErrors($errors)
    {
        return !empty($errors) ? $errors->first()[0] : "";
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {   
        $msgPasswordRule = trans('messages.PASSWORD_RULE');
        return [
            'current_password.required' => trans('messages.OLD_PASS_REQUIRED'),
            'new_password.required'     => trans('messages.NEW_PASS_REQUIRED'),            
            'new_password.min'          => $msgPasswordRule,
            'new_password.max'          => $msgPasswordRule,
            'new_password.regex'        => $msgPasswordRule
        ];
    }
}
