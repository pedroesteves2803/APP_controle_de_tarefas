<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarefaRequest extends FormRequest
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
            'tarefa' => ['required'],
            'data_limite_conclusao' => ['required', 'date']
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute é obrigatorio',
            'date' => ':attribute tem que ser uma data',
        ];
    }
}
