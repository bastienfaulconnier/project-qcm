<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'class_level'   => 'required',
            'number_choice' => 'required|numeric|between:1,20',
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
            'required' => 'Ce champ est obligatoire',
            'between'  => 'Rentrer un nombre de question entre 1 et 20'
        ];
    }
}
