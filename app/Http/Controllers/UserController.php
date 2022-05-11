<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $objUser;

    public function __construct(){
        $this->objUser = new User();
    }

    public function createUser()
    {
        return view('user.createUser');
    }

    public function storeUser(UserRequest $request)
    {
        $ait = $this->objUser->create([
            'nome'=>$request->nome,
            'matricula'=>$request->matricula,
            'email'=>$request->email,
            'orgao'=>$request->orgao,
            'unidade'=>$request->unidade,
            'funcao'=>$request->funcao,
            'senha'=>$request->senha,
            'senha' => Hash::make($request->senha),
        ]);

        if($ait){
            return redirect()->intended('/webtransito/createuser');
        }
        else{
            return redirect()->back()->with('msgError', 'Erro de Execução.');
        }
    }
}
