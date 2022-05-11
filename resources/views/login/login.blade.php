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
            <div class="container-fluid">
                <div class="container-fluid text-center bg-light p-4 position-static h-auto min-vh-100 flex-column d-flex">

                    <div class="container">
                        <div class="container w-50 mt-10 p-4 position-static h-auto d-md-inline-flex d-none shadow-lg">
                            <fieldset>
                                <div class="row align-items-center">
                                    <header class="text-center mb-4 bg-light shadow-sm align-content-center p-auto d-block">
                                        <h3 class="text-center text-capitalize"><b>Sistema Auto de infração de Trânsito - SAIT</b></h3>
                                    </header>
                                    <div class="container-fluid col-sm-6 m-auto">

                                        <img src="./assets/Imagens/LogoSistema.png" class="img-fluid" width="150px" height="90px" alt="Responsive image">

                                        <h4>Autenticação de Usuário</h4>

                                        <br>

                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>{{error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(session('msgError'))
                                            <div class="alert-danger">
                                                {{session('msgError')}}
                                            </div>
                                        @endif

                                        <form class="row g-3" method="POST" action="/webtransito/login">

                                            {{csrf_field()}}

                                            <div id="telaLogin" class="container-fluid">
                                                <div class="row p-2">
                                                    <div class="col">
                                                        <input class="form-control" name="matricula" required="required" type="text" placeholder="Matrícula"/>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col">
                                                        <input class="form-control" name="senha" required="required" type="password" placeholder="Senha"/>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="form-check align-items-center col-6">
                                                        <input class="form-check-input" type="checkbox" value="1" id="lembra-me">
                                                        <label class="form-check-label" for="lembrar-me">Lembrar-me</label>
                                                      </div>
                                                </div>
                                                <div class=" container mb-2 row p-2">
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-success btn-md">Autenticar</button>
                                                    </div>

                                                    <a class="link-dark" href="#">Esqueci a Senha</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
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

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
    </html>

