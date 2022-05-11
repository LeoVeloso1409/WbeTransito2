<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Sistema Web de Auto de Infrações de Trânsito - AIT">
            <meta name="author" content="Leonardo Veloso Neves">
            <title>WebTrânsito - AIT</title>
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

            <link rel="shortcut icon" type="imagex/png" href="assets/Imagens/logoSistema.png">

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>

        <body>
            <div class="container-fluid" id="layout">
                <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex">
                    <header class="text-center bg-info shadow-lg align-content-center p-auto d-block" id="header">
                        <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
                    </header>

                    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mt-2 mb-2 shadow-sm">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/webtransito"> <img src="assets/Imagens/logoSistema.png" width="60"  alt=""></a>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="btn nav-link active" data-bs-toggle="modal" data-bs-target="#modal" aria-current="page" href="#">Novo AIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn nav-link" href="/webtransito/createuser">Cadastrar Usuário</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn nav-link" href="/webtransito">Pesquisar</a>
                                    </li>
                                </ul>
                                <ul class="col-lg navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-link"> </li>
                                </ul>
                                <span>
                                    <a class="btn nav-link-light" href="#">Sair</a>
                                </span>
                            </div>
                        </div>
                    </nav>

                    <div class="container bg-light mt-2 mb-2" id="body">
                        <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="headTable">
                            <fieldset>
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="assets/Imagens/logoSistema.png" alt="Responsive image" width="200" height="150" id="img-header-form" class="border border-dark d-md-inline-flex">
                                    </div>

                                    <div class="col-md-8 offset-md-2 ms-auto mt-1">
                                        <h3 class="text-left">Auto de Infrações de Trânsito - AIT</h3>
                                            @foreach ($users as $user)
                                                @php
                                                    $user = $users->find($user->id);
                                                @endphp
                                            @endforeach
                                        <div class="row justify-content-around mt-4">
                                            <div class="col-md-4">
                                                <input disabled type="text" class="form-control" placeholder="{{$user->matricula}}">
                                            </div>

                                            <div class="col-md-7">
                                                <input disabled type="text" class="form-control" placeholder="{{$user->nome}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="table">
                            <table class="table table-primary table-striped">
                                <thead class="table-dark">
                                  <tr>
                                    <th scope="col">Código AIT</th>
                                    <th scope="col">Código Infração</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Agente</th>
                                    <th scope="col">Matricula</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aits as $ait)
                                        @php
                                            $user = $ait->find($ait->id)->relUsers;
                                        @endphp
                                        <tr>
                                            <th scope="row">{{$ait->cod_ait}}</th>
                                            <td>{{$ait->codigo_infracao}}</td>
                                            <td>{{$ait->placa}}</td>
                                            <td>{{$ait->nome}}</td>
                                            <td>{{$ait->matricula}}</td>
                                            <td>
                                                <a href="{{url("/webtransito/edit/$ait->cod_ait")}}"> <button class="btn btn-secondary">Iniciar</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="page-footer" id="footer">
                <div class="footer-copyright">
                    <div class="container center-align">
                        <p>Copyright &copy; 2022 by Leonardo Veloso Neves.<br>IFNMG - Pirapora/MG</p>
                    </div>
                </div>
            </footer>

            <!-- Modal -->
            <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Atenção</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <form method="POST" action="{{url("/webtransito/store")}}">
                                @csrf

                                @foreach ($users as $user)
                                    @php
                                        $user = $user->find($user->id);
                                    @endphp
                                @endforeach

                                @php
                                    $cod_ait = App\Http\Controllers\WebtransitoController::gerarCodAit();
                                @endphp

                                <input hidden type="text" name="user_id" value="{{$user->id}}">
                                <input hidden type="text" name="cod_ait" value="{{$cod_ait}}">
                                <input hidden type="text" name="orgao_autuador" value="{{$user->orgao}}">
                                <input hidden type="text" name="matricula" value="{{$user->matricula}}">
                                <input hidden type="text" name="nome" value="{{$user->nome}}">

                                <div class="modal-body">
                                    <p>Ao Iniciar uma autuação ela não poderá mais ser cancelada.</p>
                                    <br>
                                    <p>Deseja realmente continuar?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>

