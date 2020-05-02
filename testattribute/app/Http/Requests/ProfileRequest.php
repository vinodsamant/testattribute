<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\ApiFormRequest;

class ProfileRequest extends ApiFormRequest
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
            'fname' => [
                REQUIRED,
                'regex:/^[a-zA-Z! ”@$%&’()*\+,^_`~]+$/'
            ],
            'lname' => [
                REQUIRED,
                'regex:/^[a-zA-Z! ”@$%&’()*\+,^_`~]+$/'
            ],
            'gender' => [
                REQUIRED,
                'nullable',
                Rule::in(array_values(config('constant.gender')))
            ],
            'age' => [
                REQUIRED,
                'numeric',
            ]           
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
        return [
            'fname.required' => trans('messages.FIRSTNAME_REQUIRED'),
            'lname.required' => trans('messages.LASTNAME_REQUIRED'),
            'fname.regex' => trans('messages.INVALID_FIRST_NAME'),
            'lname.regex' => trans('messages.INVALID_LAST_NAME'),
            'age.numeric' => trans('messages.INVALID_AGE'),            
        ];
    }
}
