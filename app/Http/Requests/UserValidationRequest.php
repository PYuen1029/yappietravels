<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserValidationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // the IsCurrentUser handles this authorization logic
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
            'name' => 'string|required|between:3,50|',
            'email' => 'email|required',
            'hometown' => 'alpha_dash|between:3,50',
            'brief_description' => 'string|max:250',
            'age' => 'integer'
        ];
    }
}
