@extends('layout')

@section('content')
    <div class="container">
        @if(!empty($response->msg) && $response->msg !== "Sucesso.")
            <h3><span class="alert-danger">ERRO: {{$response->msg}}</span></h3>
            <a href="boleto">Voltar ao Formulário</a>
        @else
            <iframe src="{{$response->linkBoleto}}" width="1024" height="800"></iframe>
        @endif
    </div>
@endsection
