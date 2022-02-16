<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Criação Web de Auto de Infrações de Trânsito - AIT">
        <meta name="author" content="Leonardo Veloso Neves">
        <title>WebTrânsito - AIT</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
        
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" >
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="shortcut icon" href="assets/Imagens/LogoSistema.png">
        <link rel="shortcut icon" type="imagex/png" href="{{url('assets/Imagens/LogoSistema.png')}}">
    </head>
    <body>
        <div class="container-fluid text-center bg-light p-2 position-static h-auto min-vh-100 flex-column d-flex" id="site">
            <header class="text-center bg-info shadow-lg align-content-center p-auto d-block" id="header">
                <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
            </header>
            @yield('navbar')

            <div class="container-fluid shadow-lg h-auto w-100 flex-column min-vh-100" id="content">
                @csrf

                @yield('login')

                @yield('layout')

                @yield('formAit')

                @yield('usuario')

                @yield('index')

            </div>
            <div class="container-fluid" id="footer">
                <p>Copyright &copy; 2022 by Leonardo Veloso Neves.<br>IFNMG - Pirapora/MG</p>
            </div>
        </div>

        <div class="container" id="modal">
            <div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h3 class="modal-title">Atenção</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Ao Iniciar uma autuação ela não poderá mais ser cancelada.</p>
                            <br>
                            <p>Deseja realmente continuar?</p>
                        </div>
                        <div class="container">
                            <form name="createAit" id="createAit" method="POST" action="/">
                                @csrf

                                @foreach ($aits as $ait)
                                    @php
                                        $user = $ait->find($ait->id)->relUsers;   
                                    @endphp
                                @endforeach
                                    
                                @php
                                    $cod_ait = App\Http\Controllers\WebtransitoController::gerarCodAit();
                                @endphp

                                
                                <div class="form-row">
                                    <div>
                                        <input type="hidden" name="user_id" value="{{$user->id}}"class="form-control">
                                    </div>
                                    <div>
                                        <input type="hidden" name="cod_ait" value="{{$cod_ait}}"class="form-control">
                                    </div>
                                    <div>
                                        <input type="hidden" name="orgao_autuador" value="{{$user->orgao}}"class="form-control">
                                    </div>
                                    <div>
                                        <input type="hidden" name="matricula" value="{{$user->matricula}}"class="form-control">
                                    </div>
                                    <div>
                                        <input type="hidden" name="nome" value="{{$user->nome}}"class="form-control">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <a class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    <a class="btn btn-primary" type="submit" href="{{url("/layout/edit/$ait->id")}}">Continuar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
