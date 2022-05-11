<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AitRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'cod_ait' => 'required',
            'orgao_autuador' => 'required',
            'matricula' => 'required',
            'nome' => 'required',
        ];
    }

    public function messages(){

        return[
            'user_id.required' => 'O campo Código de Usuário é obrigatório.',
            'user_id.numeric' => 'O campo Código de Usuário de ser um número inteiro.',
        ];
    }
}
