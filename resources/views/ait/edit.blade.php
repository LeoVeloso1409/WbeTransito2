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

                    <div class="container bg-light mt-2 mb-2" id="body">
                        <div class="container-fluid w-75 m-auto p-4 h-auto d-md-inline-flex d-none shadow-sm" id="headTable">
                            <fieldset>
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="assets/Imagens/logoSistema.png" alt="Responsive image" width="200" height="150" id="img-header-form" class="border border-dark d-md-inline-flex">
                                    </div>

                                    <div class="col-md-8 offset-md-2 ms-auto mt-1">
                                        <h3 class="text-left">Auto de Infração de Trânsito - AIT</h3>
                                            @foreach ($users as $user)
                                                @php
                                                    $user = $users->find($user->id);
                                                @endphp
                                            @endforeach
                                        <div class="row justify-content-around mt-4">
                                            <div class="col-md-"></div>
                                            <div class="col-md-3">
                                                <input disabled type="text" class="form-control" placeholder="{{$ait->matricula}}">
                                            </div>

                                            <div class="col-md-8">
                                                <input disabled type="text" class="form-control" placeholder="{{$ait->nome}}">
                                            </div>
                                        </div>
                                        <div class="row justify-content-around p-4">
                                            <div class="col-md-9 align">
                                                <div class="input-group">
                                                    <span class="input-group-text">Código AIT</span>
                                                    <input disabled type="text" class="form-control" placeholder="{{$ait->cod_ait}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="formAit">

                            <form class="row g-3" name="edit" id="edit" method="POST" action="{{url('/webtransito/update/'.$ait->cod_ait)}}" enctype="multipart/form-data">

                                @csrf

                                <fieldset class="shadow-sm p-4">
                                    <legend>Identificação do Veículo</legend>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <input type="text" name="placa" class="form-control" id="placa" placeholder="Placa" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="marca" class="form-control" id="marca" placeholder="Marca" required>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Modelo" required>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <input type="text" name="cor" class="form-control" id="cor" placeholder="Cor" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="chassi" class="form-control" id="chassi" placeholder="Chassi">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="pais" class="form-control" id="pais" placeholder="Pais" required>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="especie" name="especie"class="form-select" required>
                                              <option selected>Espécie</option>
                                              <option value="PASSAGEIRO">Passageiro</option>
                                              <option value="CARGA">Carga</option>
                                              <option value="MISTO">Misto</option>
                                              <option value="COMPETIÇÃO">Competição</option>
                                              <option value="TRAÇÃO">Tração</option>
                                              <option value="ESPECIAL">Especial</option>
                                              <option value="COLEÇÃO">Coleção</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <legend>Identificação do Condutor</legend>
                                    <div class="row p-2">
                                        <div class="col-md-6">
                                            <input type="text" name="nome_condutor" class="form-control" id="nome_condutor" placeholder="Nome">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="cpf_condutor" class="form-control" id="cpf_condutor" placeholder="CPF">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="rg_condutor" class="form-control" id="rg_condutor" placeholder="RG">
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <input type="text" name="cnh_condutor" class="form-control" id="cnh_condutor" placeholder="CNH">
                                        </div>
                                        <div class="col-md-3">
                                            <select id="uf_cnh" name="uf_cnh"class="form-select"placeholder="UF-CNH">
                                              <option selected>UF-CNH</option>
                                              <option value="MG">MG</option>
                                              <option value="SP">SP</option>
                                              <option value="BA">BA</option>
                                              <option value="...">...</option>
                                              <option value="DF">DF</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="categoria" name="categoria"class="form-select" placeholder="Categoria">
                                              <option selected>Categoria</option>
                                              <option value="A">A</option>
                                              <option value="AB">AB</option>
                                              <option value="ACC">ACC</option>
                                              <option value="C">C</option>
                                              <option value="D">D</option>
                                              <option value="E">E</option>
                                              <option value="PPD">PPD</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="date" name="validade_cnh" class="form-control" id="validade_cnh">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <legend>Local/Data/Hora</legend>
                                    <div class="row p-2">
                                        <div class="col-md-5">
                                            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Logradouro" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="numero" class="form-control" id="numero"  placeholder="Número" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" required>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md-5">
                                            <input type="date" name="data" class="form-control" id="data" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="time" name="hora" class="form-control" id="hora" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input disabled type="text" name="uf_mg" value="MG" class="form-control" id="uf_mg" placeholder="UF-MG">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <legend>Identificação da Infração</legend>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <input type="text" name="codigo_infracao" class="form-control" id="codigo_infracao" placeholder="Código da Infração" required>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" required>
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <input type="text" name="equipamento_afericao" class="form-control" id="equipamento_afericao" placeholder="Equipamento Aferição">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="medicao_realizada" class="form-control" id="medicao_realizada" placeholder="Medição Realizada">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="limite_regulamentado" class="form-control" id="limite_regulamentado" placeholder="Limite Regulamentado">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="valor_considerado" class="form-control" id="valor_considerado" placeholder="Valor Considerado">
                                        </div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-md">
                                            <textarea type="text" name="observacoes" class="form-control" id="observacoes" placeholder="Observações"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="shadow-sm p-4">
                                    <legend>Medida Administrativa</legend>
                                    <div class="row p-2">
                                        <div class="col-md-4">
                                            <select id="medida1" name="medida1" class="form-select">
                                                <option value="null" selected>Selecione</option>
                                                <option value="REMOÇÃO">Remoção</option>
                                                <option value="RECOLHIMENTO">Recolhimento</option>
                                                <option value="RETENÇAO">Retenção</option>
                                                <option value="TESTE DE ALCOOLEMIA">Teste de Alcoolemia</option>
                                            </select>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="medida2" name="medida2" class="form-select">
                                                <option value="null" selected>Selecione</option>
                                                <option value="CNH/PPD/ACC">CNH/PPD/ACC</option>
                                                <option value="CRLV">CRLV</option>
                                                <option value="CRV">CRV</option>
                                                <option value="VEÍCULO">Veículo</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="ficha_vistoria" class="form-control" id="ficha_vistoria" placeholder="Ficha de Vistoria">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <legend>Anexar Imagem</legend>
                                    <div class="row p-2">
                                        <div class="col-md-6">
                                            <input type="file" name="imagem" class="form-control" id="imagem" placeholder="Carregar Imagens">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <legend>Identificação do Agente</legend>
                                    <div class="row p-2">
                                        <div class="col-md-3">
                                            <label for="matricula" class="form-label">Matrícula</label>
                                            <input disabled type="text" class="form-control" id="matricula" placeholder="{{$ait->matricula}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="agente" class="form-label">Nome</label>
                                            <input disabled type="text" class="form-control" id="agente" placeholder="{{$ait->nome}}">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="shadow-sm p-4">
                                    <div class="row p-2">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-lg">Finalizar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </html>
