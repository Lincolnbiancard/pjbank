@extends('layout')

@section('content')


<!------ Include the above in your HEAD tag ---------->


<div class="container" >
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="glyphicon glyphicon-music"></i>
        <span class="count-numbers">Estoque: {{ $qtdeEstoque }}</span>
        <span class="count-name glyphicon glyphicon-music">Total produtos cadastrados</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="glyphicon glyphicon-plus"></i>
        <span class="count-numbers">R$ {{ $valorTotal }}</span>
        <span class="count-name">Soma total do estoque</span>
      </div>
    </div>
   
   
    


@endsection