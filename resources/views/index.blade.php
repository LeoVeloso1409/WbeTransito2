@extends('main')

@section('index')

    <div class="container text-center p-2 position-static h-auto flex-column d-flex">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex bg-secondary shadow-lg mt-1 mb-1 w-100 mh-100" id="navbar">
            <a class="" href="/"> <img src="./assets/Imagens/logoSistema.png" width="60"></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="/">Inicio</a>
                    </li>
                </ul>

                <ul class="col-lg-10 navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item"> </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <span>
                        <a class="btn btn-secondary" href="logout">Sair</a>
                    </span>
                </ul>
            </div>
        </nav>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-hover thead-dark">
            <thead>
                <tr>
                    <th scope="col">Código AIT</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
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
                        <td>{{$ait->placa}}</td>
                        <td>{{$ait->marca}}</td>
                        <td>{{$ait->modelo}}</td>
                        <td>{{$ait->orgao_autuador}}</td>
                        <td>{{$user->matricula}}</td>
                        <td>{{$user->nome}}</td>
                        <td>
                            <a href="{{url("/index/show/$ait->id")}}"> <button class="btn btn-primary">Visualizar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
