@extends('layout')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">

                @if(!empty($response->msg) && $response->msg !== "Sucesso.")
                <h3><span class="alert-danger">ERRO: {{$response->msg}}</span></h3>
                 @endif
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Gerar Boleto</h4>
                            </div>
                            <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="boleto" method="POST">
                                {!! csrf_field() !!}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Vencimento</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="vencimento" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Valor</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="number" disabled value="{{  round($valorTotal) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Juros</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="juros">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Multa</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="multa">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome do cliente</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="nome_cliente">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">CPF do cliente</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="cpf_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Endereço</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="endereco_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Complemento</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" type="text" name="complemento_cliente"></textarea>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Bairro</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="bairro_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Cidade</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="cidade_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Estado</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="estado_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">CEP</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="cep_cliente">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Logo da Empresa</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="url" name="logo_url">
                                            <small id="logo_url" class="form-text text-muted">Insira o link da logo.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">GRUPO</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="grupo">
                                            </div>
                                    </div>
                                        
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Limpar">
                                            <input type="submit" class="btn btn-primary" value="Enviar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /form user info -->
            </div>
        </div>
    </div>

@endsection