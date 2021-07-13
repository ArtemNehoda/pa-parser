<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParseRequest extends FormRequest
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
            'strings' => 'required|array|min:1',
            'strings.*' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'strings.required' => 'At least one string must be entered',
            'strings.*.required' => 'Empty strings are not allowed'
        ];
    }
}
