@extends('main')

@section('layout')

@yield('navbar')

<nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex bg-secondary shadow mt-1 mb-1 w-100 mh-100" id="navbar">
    <a href="/"> <img src="assets/Imagens/logoSistema.png" width="60"></a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <button class="btn btn-secondary" data-toggle="modal" data-target="#modal-alert">Novo Ait</button>
            </li>
            <li class="nav-item">
                <a class="btn btn-secondary" href="layout/createuser">Cadastrar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-secondary" href="layout/index">Mostrar AIT's</a>
            </li>
        </ul>
        <span>
            <a class="btn btn-secondary" href="logout">Sair</a>
        </span>
    </div>
</nav>

<div class="container-fluid h-auto w-100 flex-column min-vh-100" id="content">
    <div class="row p-1 mt-5 d-inline-flex shadow-sm position-static w-75" id="header-form">
        <div class="container w-25 m-auto p-auto position-static h-auto flex-row-reverse d-md-inline-flex d-none" id="imgHeaderForm">
            <img src="assets/Imagens/logoSistema.png" alt="Responsive image" width="150" height="100" id="img-header-form" class="border border-dark d-none d-md-inline-flex">
        </div>
        <div class="container h-auto mh-100 mw-100 text-right w-75 d-inline" id="textForm">
            <h3 class="text-left">Auto de Infrações de Trânsito - AIT</h3>
            <fieldset disabled>
                <form>
                    @foreach ($aits as $ait)
                        @php
                            $user = $ait->find($ait->id)->relUsers;
                        @endphp
                    @endforeach
                    <div class="form-row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="form-control" placeholder={{$user->matricula}}>
                        </div>
                        <div class="invisible-sm col-md-2 col-lg-2 d-none d-md-inline"></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <input type="text" class="form-control" placeholder={{$user->nome}}>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
    <div class="row mw-100 mt-5 w-75 d-inline-block" id="img-layout"></div>
    <br>
</div>

@endsection
