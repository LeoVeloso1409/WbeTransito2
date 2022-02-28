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
            'placa' => 'required|alpha_num|max:7',
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'chassi'=> 'alpha_num',
            'pais' => 'required',
            'especie' => 'required',
            'nome_condutor',
            'cpf_condutor',
            'rg_condutor',
            'cnh_condutor',
            'uf_cnh',
            'categoria_cnh',
            'validade_cnh',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'data' => 'required|max:8|min:6',
            'hora' => 'required|max:4',
            'codigo_infracao' => 'required',
            'descricao' => 'required',
            'medicao_realizada',
            'limite_regulamentado',
            'valor_considerado',
            'observacoes',
            'medida1',
            'medida2',
            'ficha_vistoria',
            'imagem' => 'image',
        ];
    }
}
