<h1>Home Page do Site</h1>

{{--para passar dados do meu controller para a view--}}
{{$teste}} - {{$teste2}} - {{$teste3}}


{{--USANDO TAGS BLADE.PHP--}}

@extends('site.templete.template1')

@section('content')

    <h2>Passando coteudo via tags blade</h2>

@endsection