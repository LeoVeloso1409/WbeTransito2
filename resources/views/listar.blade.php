@extends('layout')

@section('listar')

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

    <div class="container-fluid w-100 flex-column mb-50" id="content">
        <div class="row p-1 mt-5 d-inline-flex shadow-sm position-static w-75" id="header-form">
            <div class="container w-25 m-auto p-auto position-static h-auto flex-row-reverse d-md-inline-flex d-none" id="imgHeaderForm">
                <img src="assets/Imagens/logoSistema.png" alt="Responsive image" width="150" height="100" id="img-header-form" class="border border-dark d-none d-md-inline-flex">
            </div>
            <div class="container h-auto mh-100 mw-100 text-right w-75 d-inline">
                <h3 class="text-left">Auto de Infrações de Trânsito - AIT</h3>
                <fieldset disabled>
                    @foreach ($users as $user)
                        @php
                            $user = $users->find($user->id);
                        @endphp
                    @endforeach
                    <div class="form-row d-inline">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="form-control" placeholder={{$user->matricula}}>
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="form-control" placeholder={{$user->nome}}>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

    <div class="col-8 m-auto">
        <table class="table table-hover thead-dark">
            <thead>
                <tr>
                    <th scope="col">Código AIT</th>
                    <th scope="col">Id Agente</th>
                    <th scope="col">Orgão</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Agente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aits as $ait)
                    @php
                        $user = $ait->find($ait->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$ait->cod_ait}}</th>
                        <td>{{$ait->user_id}}</td>
                        <td>{{$ait->orgao_autuador}}</td>
                        <td>{{$user->matricula}}</td>
                        <td>{{$user->nome}}</td>
                        <td>
                            <a href="{{url("edit/$ait->id")}}"> <button class="btn btn-primary">Iniciar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
