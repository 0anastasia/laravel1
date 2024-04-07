<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequestStudent extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [            
            'surname' => 'required',
            'name' => 'required'            
        ];
    }

    public function messages()
    {
        return [
            'surname.required' => ' Поле "Фамилия" должно быть заполнено!',
            'name.required' => ' Поле "Имя" должно быть заполнено!'            
        ];
    }

}