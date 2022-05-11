@extends('layout')

@section('edit')

    <nav class="navbar navbar-expand-lg navbar-light sticky-top d-flex bg-secondary shadow-lg mt-1 mb-1 w-100 mh-100" id="navbar">
        <a class="navbar-brand" href="/webtransito"> <img src="assets/Imagens/logoSistema.png" width="60"></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="/webtransito">Início</a>
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

    <div class="container-fluid h-auto w-100 flex-column min-vh-100" id="content">
        <form name="edit" id="edit" method="POST" action="{{url("/webtransito/$ait->id")}}">
            @method('PUT')

            @csrf

            <div class="row p-1 mt-5 d-inline-flex shadow-sm position-static w-75" id="header-form">
                <div class="container w-25 m-auto p-auto position-static h-auto flex-row-reverse d-md-inline-flex d-none" id="imgHeaderForm">
                    <img src="./Imagens/logoSistema.png" alt="Responsive image" width="150" height="100" id="img-header-form" class="border border-dark d-none d-md-inline-flex">
                </div>
                <div class="container h-auto mh-100 mw-100 text-right w-75 d-inline" id="textForm">
                    <h3 class="text-left">Auto de Infrações de Trânsito - AIT</h3>
                    <fieldset disabled>
                        <div class="form-row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <input type="text" class="form-control" placeholder={{$ait->orgao_autuador}}>
                            </div>
                            <div class="invisible-sm col-md-2 col-lg-2 d-none d-md-inline"></div>
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <input type="text" name="cod_ait" class="form-control" placeholder={{$ait->cod_ait}}>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row row-cols- p-1 h-auto d-inline-flex mw-100 clearfix position-static flex-row align-content-center mt-5 w-75" id="content-form">
                <div class="mw-100 h-auto w-75 container-fluid d-block shadow border-dark" id="form">
                    <fieldset>
                        <legend>Identificação do Veículo</legend>
                        <div class="form-row">
                            <div class="col-4">
                                <input type="text" name="placa" class="form-control" placeholder="Placa" required>
                            </div>
                            <div class="col-4">
                                <input type="text" name="marca" class="form-control" placeholder="Marca" required>
                            </div>
                            <div class="col-4">
                                <input type="text" name="modelo" class="form-control" placeholder="Modelo" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 col-4">
                                <input type="text" name="cor" class="form-control" placeholder="Cor" required>
                            </div>
                            <div class="col-4 col-md-3">
                                <input type="text" name="chassi" class="form-control" placeholder="Chassi">
                            </div>
                            <div class="col-4 col-md-3">
                                <input type="text" name="pais" class="form-control" placeholder="País" required>
                            </div>
                            <div class="from-group col-8 col-md-3">
                                <div class="input-group">
                                    <select name="especie" class="form-control" required>
                                        <option value="null" selected>Espécie</option>
                                        <option value="Passageiro">Passageiro</option>
                                        <option value="Carga">Carga</option>
                                        <option value="Misto">Misto</option>
                                        <option value="Competição">Competição</option>
                                        <option value="Tração">Tração</option>
                                        <option value="Especial">Especial</option>
                                        <option value="Coleção">Coleção</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Identificação do Condutor</legend>
                        <div class="form-row">
                            <div class="col-5 col-md-5">
                                <input type="text" name="nome_condutor" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-4 col-md-4">
                                <input type="text" name="cpf_condutor" class="form-control" placeholder="CPF">
                            </div>
                            <div class="col-3 col-md-3">
                                <input type="text" name="rg_condutor" class="form-control" placeholder="RG">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4 col-md-4">
                                <input type="text" name="cnh_condutor" class="form-control" placeholder="CNH">
                            </div>
                            <div class="from-group col-5 col-md-2">
                                <div class="input-group">
                                    <select name="uf_cnh" class="form-control">
                                        <option value="null" selected>UF-CNH</option>
                                        <option value="1">AC</option>
                                        <option value="2">AM</option>
                                        <option value="3">BA</option>
                                        <option value="4">...</option>
                                        <option value="5">MG</option>
                                        <option value="6">...</option>
                                        <option value="7">...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <input type="text" name="categoria_cnh" class="form-control" placeholder="Categoria">
                            </div>
                            <div class="col-6 col-md-4">
                                <input type="date" name="validade_cnh" class="form-control" placeholder="Validade">
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Local/Data/Hora</legend>
                        <div class="form-row">
                            <div class="col-5 col-md-4">
                                <input type="text" name="logradouro" class="form-control" placeholder="Logradouro" required>
                            </div>
                            <div class="col-3 col-md-2">
                                <input type="text" name="numero" class="form-control" placeholder="Número" required>
                            </div>
                            <div class="col-4 col-md-3">
                                <input type="text" name="bairro" class="form-control" placeholder="Bairro" required>
                            </div>
                            <div class="col- col-md-3">
                                <input type="text" name="cidade" class="form-control" placeholder="Cidade" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6 col-md-4">
                                <input type="date" name="data" class="form-control" placeholder="Data" required>
                            </div>
                            <div class="col-3 col-md-2">
                                <input type="text" name="hora" class="form-control" placeholder="Hora" required>
                            </div>
                            <div class="col-3 col-md-3">
                                <fieldset disabled>
                                    <input type="text" name="uf_mg" class="form-control" value="MG" placeholder="UF-MG">
                                </fieldset>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Identificação da Infração</legend>
                        <div class="form-row">
                            <div class="col-3">
                                <input type="text" name="codigo_infracao" class="form-control" placeholder="Código" required>
                            </div>
                            <div class="col-9">
                                <input type="text" name="descricao" class="form-control" placeholder="Descrição" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6 col-md-3">
                                <input type="text" name="equipamento_afericao" class="form-control" placeholder="Equip. Aferição">
                            </div>
                            <div class="col-6 col-md-3">
                                <input type="text" name="medicao_realizada" class="form-control" placeholder="Medição Realizada">
                            </div>
                            <div class="col-6 col-md-3">
                                <input type="text" name="limite_regulamentado" class="form-control" placeholder="Limite Regulamentado">
                            </div>
                            <div class="col-6 col-md-3">
                                <input type="text" name="valor_considerado" class="form-control" placeholder="Valor Considerado">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <textarea class="form-control" name="observacoes" id="exampleFormControlTextarea1" rows="3" placeholder="Observações"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Medida Administrativa</legend>
                        <div class="form-row">
                            <div class="from-group col-4">
                                <div class="input-group">
                                    <select name="medida1" class="form-control">
                                        <option value="null" selected>Selecione</option>
                                        <option value="Remoção">Remoção</option>
                                        <option value="Recolhimento">Recolhimento</option>
                                        <option value="Retenção">Retenção</option>
                                        <option value="Teste de Alcoolemia">Teste de Alcoolemia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="from-group col-4">
                                <div class="input-group">
                                    <select name="medida2" class="form-control">
                                        <option value="null" selected>Selecione</option>
                                        <option value="CNH/PPD/ACC">CNH/PPD/ACC</option>
                                        <option value="CRLV">CRLV</option>
                                        <option value="CRV">CRV</option>
                                        <option value="Veículo">Veículo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <input type="text" name="ficha_vistoria" class="form-control" placeholder="Ficha de Vistória">
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Anexar Imagem</legend>
                        <div class="form-row">
                            <div class="col">
                                <input type="file" name="imagem" class="form-control-file" id="imagem">
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset disabled>
                        <legend>Identificção do Agente</legend>
                        <div class="form-row">
                            <div class="col-4 col-md-3">
                                <input type="text" class="form-control" placeholder={{$ait->matricula}}>
                            </div>
                            <div class="col-10 col-md-5">
                                <input type="text" class="form-control" placeholder={{$ait->nome}}>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <div>
                        <button class="btn btn-primary" type="submit">Finalizar</button>
                    </div>
                    <br>
                </div>
            </div>
        </form>
        <br>
    </div>

@endsection
