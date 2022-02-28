@extends('layout')

@section('create')

    <nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex bg-secondary shadow-lg mt-1 mb-1 w-100 mh-100" id="navbar">
        <a class="navbar-brand" href="/"> <img src="assets/Imagens/logoSistema.png" width="60"></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="/">Início</a>
                </li>
            </ul>
            <ul class="col-lg navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item"> </li>
            </ul>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <span>
                    <a class="btn btn-secondary" href="logout">Sair</a>
                </span>
            </ul>
        </div>
    </nav>
    
    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    <div class="col-8 m-auto">
        <form name="create" id="create" method="POST" action="/">
            
            @csrf

            @foreach ($users as $user)
                @php
                    $user = $user->find($user->id);
                @endphp
            @endforeach
            @php
                $cod_ait = App\Http\Controllers\WebtransitoController::gerarCodAit();
            @endphp
            <div class="container-fluid row row-cols- p-1 h-auto d-inline-flex mw-100 clearfix position-static flex-row align-content-center mt-5 w-75">
                <div class="mw-100 h-auto w-75 container-fluid d-block shadow-lg border-dark">
                    <fieldset>
                        <legend>Nova AIT</legend>
                        <div class="form-row">
                            <div class="col-8">
                                <input class="form-control" type="text" name="user_id" value="{{$user->id}}"class="form-control" placeholder="{{$user->id}}">
                            </div>
                
                            <div class="col-8">
                                <input class="form-control" type="text" name="cod_ait" value="{{$cod_ait}}"class="form-control" placeholder="{{$cod_ait}}">
                            </div>

                            <div class="col-8">
                                <input class="form-control" type="text" name="orgao_autuador" value="{{$user->orgao}}"class="form-control" placeholder="{{$user->orgao}}">
                            </div>

                            <div class="col-8">
                                <input class="form-control" type="text" name="matricula" value="{{$user->matricula}}"class="form-control" placeholder="{{$user->matricula}}">
                            </div>

                            <div class="col-8">
                                <input class="form-control" type="text" name="nome" value="{{$user->nome}}"class="form-control" placeholder="{{$user->nome}}">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <br>

            <div class="footer">
                <button class="btn btn-primary" type="submit">Continuar</button>
            </div>
        </form>
    </div>
@endsection