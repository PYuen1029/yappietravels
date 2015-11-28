<?php

namespace App\Http\Requests;

use Auth;
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
     * Get the validation rules that apply to basic UserRequests. However because it doesn't specify whether it's registration or update, it will not validate e.g., email, password
     *
     * @return array
     */
    public function rules()
    {
        $thing = ($user = Auth::user()) ? "$user->id" : ' ,';

        return [
            'name'              => 'string|required|between:3,155',
            'hometown'          => 'alpha_dash|between:3,50',
            'brief_description' => 'string|max:250',
            'age'               => 'integer'
        ];
    }
}
