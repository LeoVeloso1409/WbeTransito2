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
        <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex" id="site">
            <header class="text-center bg-info shadow-lg align-content-center p-auto d-block" id="header">
                <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
            </header>

            <div class="container-fluid shadow-lg h-auto w-100 flex-column min-vh-100" id="content">
                @csrf

                @yield('login')

                @yield('index')

                @yield('create')

                @yield('edit')

                @yield('listar')

            </div>
            <div class="container-fluid" id="footer">
                <p>Copyright &copy; 2022 by Leonardo Veloso Neves.<br>IFNMG - Pirapora/MG</p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
