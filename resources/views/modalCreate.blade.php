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
                            <p>Ao Iniciar uma autuação, esta não poderá mais ser cancelada.</p>
                            <br>
                            <p>Deseja realmente continuar?</p>
                        </div>
                        <div class="container">
                            <form name="tableAit" id="tableAit" method="POST" action="/layout/create">
                                @csrf

                                @php
                                    $user = $users->find($user->id);
                                    //$ait = $aits->find($ait->id);
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
                                    <a class="btn btn-primary" type="submit">Continuar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>