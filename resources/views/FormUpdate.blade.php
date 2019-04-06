@extends('layout')

@section('content')

    <div class="container py-0">
        <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Atualizando o Produto {{ $product->descricaoProduto }}</h4>
                            </div>
                            <div class="card-body">
                            <form class="form" role="form" action="{{ url('/update/' . $product->codigoProduto) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome Produto</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="descricaoProduto" value="{{ $product->descricaoProduto }}"  name="descricaoProduto" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Quantidade</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" id="qtdeProduto" name="qtdeProduto" value="{{ $product->qtdeProduto }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Preço</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" id="precoProduto" name="precoProduto" value="{{ $product->precoProduto }}" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            
                                            <input type="submit" class="btn btn-primary" value="Salvar">
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