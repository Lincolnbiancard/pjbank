@extends('layout')

@section('content')
    <div class="row align-content-center"></div>
    <div class="row align-content-center">
        <div class="col-sm">
            Uma de três colunas
        </div>
        <div class="col-sm">
            <table class="lin-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Qtde</th>
                    <th>Preço</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->codigoProduto}}</td>
                        <td>{{$product->descricaoProduto}}</td>
                        <td>{{$product->qtdeProduto}}</td>
                        <td>{{$product->precoProduto}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm">
            Uma de três colunas
        </div>
    </div>
@endsection
