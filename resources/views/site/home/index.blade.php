
{{--USANDO TAGS BLADE.PHP--}}

@extends('site.templete.template1')

@section('content')

    <h1>Home page do site</h1>
    <h2>Passando coteudo via tags blade</h2>

    {{--Com essa tag ela me PROTEGE--}}
    {{$xss}}

    {{--Com essa ela executa--}}
    {{--{!! $xss !!}--}}

    @if($var == 123)

        <p>Entrou no IF</p>

        @else

        <p>Entrou no ELSE</p>

    @endif

    {{--Verifica se e falso--}}

    @unless($var == 12)

        <p>Nao e igual</p>

    @endunless



@endsection