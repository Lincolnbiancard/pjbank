@extends('layout')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Cadastro de Produto</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="store" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome Produto</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="descricaoProduto" name="descricaoProduto" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Quantidade</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" id="qtdeProduto" name="qtdeProduto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Valor</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" id="precoProduto" name="precoProduto" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Limpar">
                                            <input type="submit" class="btn btn-primary" value="Cadastrar">
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