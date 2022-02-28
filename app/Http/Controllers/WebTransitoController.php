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

    public function listar()
    {
        $users = $this->objUser->all();
        $aits = $this->objAit->all()->sortBy('cod_ait');

        return view('listar', compact('users', 'aits'));
    }

    public function index()
    {
        $users = $this->objUser->all();

        return view('index', compact('users'));
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

        return view('create', compact('users'));
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
            return redirect()->intended('listar');
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
    public function show($id)
    {
        $ait = $this->objAit->find($id);
        
        return view('show', compact('ait'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ait = $this->objAit->find($id);

        return view('create', compact('ait'));
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
        //
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
