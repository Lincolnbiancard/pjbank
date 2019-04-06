@extends('layout')

@section('content')
    <div class="container">
            <iframe src="{{$response->linkBoleto}}" width="1024" height="800"></iframe>
    </div>
@endsection
