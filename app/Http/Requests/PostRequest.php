<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'         => 'required',
            'abstract'      => 'required',
            'content'       => 'required',
            'url_thumbnail' => 'image|max:3000',            
            'status'        => 'in:published,unpublished'
        ];
    }

    /**
     * Send a message with the validation.
     *
     * @return array
     */
    public function messages() {
        return [
            'required' => 'Ce champ est obligatoire.'
        ];
    }
}
