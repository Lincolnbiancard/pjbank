@extends('layout')

@section('content')
    <div class="col-sm-12">
        @foreach (range('A', 'Z') as $letra)
            <div class="btn group">
            <a href="{{ url('grid/' . $letra) }}" class="btn btn-primary {{ isset($criterio) && $criterio === $letra ? 'disabled' : '' }}">
                    {{ $letra }}
                </a>
            </div>
        @endforeach
    </div>
    <div class="col-sm-5">
            @if(isset($criterio))
            <h1>Buscado: {{ $criterio or '' }}</h1>
            @endif
    </div>
    
    <div class="container">
        {{-- Adicionar --}}
        <a href="{{ url('/formproduct') }}" style="position: absolute; right: 100px; margin-top: 15px;" class="btn btn-success">Novo Produto</a>
        
        {{-- Buscar --}}
        <form style=" margin-top: 15px;" action="{{  url('grid') }}" method="POST">
                <div class="input-group">
                    {{ csrf_field() }}
                    <input type="text" class="form-control col-sm-8" name="criterio" placeholder="Digite um ID, uma letra ou palavra">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Buscar</button>
                    </span>
                </div><!-- /input-group -->
            </form>
        <div class="row">
            @if(sizeof($products) == 0)
            <div>
                <span class="text-danger">Nenhum produto encontrado!</span>
            </div>
            @endif
            @foreach($products as $product)
                <div class="col-sm-4 lin-column" style="margin-bottom: 100px">
                    <div class="card" style="width: 20rem; heigth: 5rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->descricaoProduto}} - #{{$product->codigoProduto}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item"><span>Quantidade:</span> {{$product->qtdeProduto}}</li>
                            <li class="list-group-item"><span>Preço: </span> {{$product->precoProduto}}</li>
                        </ul>
                        <div class="card-body">
                            
                            
                            <form action="destroy/{{ $product->codigoProduto }}" method="post">
                                <a type="submit" method="get" href="show/{{ $product->codigoProduto }}" class="btn btn-primary btn-sm">Atualizar</a>
                                <input class="btn btn-danger btn-sm" type="submit" value="Excluir" />
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="lin-footer bg-dark text-center">
        <a class="btn btn-outline-light" href="{{ $products->previousPageUrl() }}">Voltar</a>
        <a class="btn btn-outline-light" href="{{ $products->nextPageUrl() }}">Próximo</a>
    </div>
@endsection