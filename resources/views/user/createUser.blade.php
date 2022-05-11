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
                            <a class="navbar-brand" href="/webtransito"> <img src="assets/Imagens/logoSistema.png" width="60"  alt="Início"></a>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="btn nav-link active" aria-current="page" href="#">Novo AIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn nav-link" href="#">Cadastrar Usuário</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn nav-link" href="#">Pesquisar</a>
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

                    <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none" id="formAit">

                        <form class="row g-3" name="createuser" id="createuser" method="POST" action="{{url('/webtransito/store')}}">

                            @csrf

                            <fieldset class="shadow-sm p-4">

                                <header class="text-center mb-4 bg-light shadow-sm align-content-center p-auto d-block">
                                    <h3 class="text-center"><b>Sistema Auto de Infração de Trânsito - SAIT</b></h3>
                                </header>

                                <img src="./assets/Imagens/LogoSistema.png" class="img-fluid" width="150px" height="90px" alt="Responsive image">

                                <legend>Cadastro de Usuário</legend>
                                <div class="row p-2">
                                    <div class="col">
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matrícula" required>
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-3">
                                        <select id="orgao" name="orgao"class="form-select" required>
                                        <option selected>Orgão</option>
                                        <option value="PMMG">PMMG</option>
                                        <option value="PCMG">PCMG</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="unidade" name="unidade"class="form-select" required>
                                        <option selected>Unidade</option>
                                        <option value="1 BPM">1 BPM</option>
                                        <option value="2 BPM">2 BPM</option>
                                        <option value="3 BPM">3BPM</option>
                                        <option value="...">...</option>
                                        <option value="55 BPM">55BPM</option>

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="funcao" name="funcao"class="form-select" required>
                                        <option selected>Função</option>
                                        <option value="ADMIN">ADMINISTRADOR</option>
                                        <option value="AGENTE">AGENTE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-3">
                                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="password" name="confirmar_senha" class="form-control" id="confirmar_senha" placeholder="Confirme a senha" required>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="shadow-sm p-4">
                                <div class="row p-2">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>


                </div>


            </div>

        </body>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </html>
