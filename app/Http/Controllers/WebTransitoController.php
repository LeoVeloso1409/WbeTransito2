<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ModelAit;
use App\Http\Requests\AitRequest;

class WebTransitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $objUser;
    private $objAit;

    public function __construct(){
        $this->objUser = new User();
        $this->objAit = new ModelAit();
    }

    public function login()
    {

        return view('login.login');
    }

    public function index()
    {
        $users = $this->objUser->all();
        $aits = $this->objAit->all()->sortBy('cod_ait');

        return view('ait.index', compact('users', 'aits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->objUser->all();
        //$aits = $this->objAit->all();

        return view('layout.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AitRequest $request)
    {
        $ait = $this->objAit->create([
            'user_id'=>$request->user_id,
            'cod_ait'=>$request->cod_ait,
            'orgao_autuador'=>$request->orgao_autuador,
            'matricula'=>$request->matricula,
            'nome'=>$request->nome,
        ]);

        if($ait){
            return redirect()->intended('/webtransito/edit/'.$request->cod_ait);
        }
        else{
            return redirect()->back()->with('msgError', 'Erro de Execução.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = $this->objUser->all();
        $aits = $this->objAit->all()->sortBy('cod_ait');

        return view('layout.listar', compact('users', 'aits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd("edit");
        $ait = $this->objAit->where("cod_ait", $id)->first();

        //dd($ait);

        $users = $this->objUser->all();

        return view('ait.edit', compact('ait', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AitRequest $request, $id)
    {
        $ait = $this->objAit->where(['cod_ait'=>$id])->update([
            'placa'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'cor'=>$request->cor,
            'chassi'=>$request->chassi,
            'pais'=>$request->pais,
            'especie'=>$request->especie,

            'nome_condutor'=>$request->nome_condutor,
            'cpf_condutor'=>$request->cpf_condutor,
            'rg_condutor'=>$request->rg_condutor,
            'cnh_condutor'=>$request->cnh_condutor,
            'uf_cnh'=>$request->uf_cnh,
            'categoria_cnh'=>$request->categoria_cnh,
            'validade_cnh'=>$request->validade_cnh,

            'logradouro'=>$request->logradouro,
            'numero'=>$request->numero,
            'bairro'=>$request->bairro,
            'cidade'=>$request->cidade,
            'data'=>$request->data,
            'hora'=>$request->hora,

            'codigo_infracao'=>$request->codigo_infracao,
            'descricao'=>$request->descricao,
            'medicao_realizada'=>$request->medicao_realizada,
            'limite_regulamentado'=>$request->limite_regulamentado,
            'valor_considerado'=>$request->valor_considerado,
            'observacoes'=>$request->observacoes,

            'medida1'=>$request->medida1,
            'medida2'=>$request->medida2,
            'ficha_vistoria'=>$request->ficha_vistoria,

            'imagem'=>$request->imagem,
        ]);

        if($ait){
            return redirect()->intended('/webtransito');
        }
        else{
            return redirect()->back()->with('msgError', 'Erro de Execução.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function gerarCodAit(){

        $cod_ait = date('Y').'-PM-'.idate('U');
        return $cod_ait;

        /*
        $users = $this->objUser->all();
        //$user = $users->find($id);

        if($users->orgao === 'pmmg'){
            $cod_ait = 'PM-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
        if($users->orgao === 'pcmg'){
            $cod_ait = 'PC-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
        */
    }
}
