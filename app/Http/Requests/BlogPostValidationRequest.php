<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class BlogPostValidationRequest extends Request
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
        $postId = (!empty($this->route()->blogPost->id)) ? "," . $this->route()->blogPost->id : null;
        
        return [
            'title'             =>  'required|max:255|unique:blog_posts,title' . "$postId" . '|string',
            'tagline'           =>  'max:255|string',
            'content'           =>  'string|required',
            'published_at'      =>  'date_format:Y-m-d|required'
        ];
    }
}
