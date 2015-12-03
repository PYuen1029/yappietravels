<?php

namespace App\Http\Requests;

use App\Flyer;
use App\Http\Requests\Request;

class PhotoValidationRequest extends Request
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
			'photo'					=> 'mimes:jpg,jpeg,png,bmp',
			'inscription_title'		=> 'string|max:50',
			'inscription_content'	=> 'string|max:255'
        ];
    }
}
