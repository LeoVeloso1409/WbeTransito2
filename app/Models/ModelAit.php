<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAit extends Model
{
    protected $table = 'aits';

    // Permitir Mass Assignment nos campos
    protected $fillable = [

        'user_id',
        'cod_ait',
        'orgao_autuador',
        
        'placa',
        'marca',
        'modelo',
        'cor',
        'chassi',
        'pais',
        'especie',
        'nome_condutor',
        'cpf_condutor',
        'rg_condutor',
        'cnh_condutor',
        'uf_cnh',
        'categoria_cnh',
        'validade_cnh',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'data',
        'hora',
        'codigo_infracao',
        'descricao',
        'medicao_realizada',
        'limite_regulamentado',
        'valor_considerado',
        'observacoes',
        'medida1',
        'medida2',
        'ficha_vistoria',
        'imagem',

        'matricula',
        'nome',
    ];

    use HasFactory;

    public function relUsers(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
