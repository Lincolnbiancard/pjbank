@extends('layout')

@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <div class="container">
      <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">Estoque: {{ $qtdeEstoque }}</span>
          <span class="count-name">Total produtos cadastrados</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">R$ {{ $valorTotal }}</span>
          <span class="count-name">Soma total do estoque</span>
        </div>
      </div>
    </div>
  </div>

@endsection