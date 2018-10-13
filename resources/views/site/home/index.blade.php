
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

    {{--loop de repeticao--}}
    
    @for ($i = 0; $i <= 10; $i++)

        <p>valor {{$i}}</p>
    
    @endfor

    {{--foreach--}}
    
    @foreach ($array as $campo)

        {{$campo}}
    
    @endforeach

    {{--forelse--}}
    @forelse($array2 as $campo)

        {{$campo}}

    @empty
        <p>Nao possui valores no array</p>

    @endforelse

    {{--operacoes em PHP direto--}}

    @php

    @endphp

    {{--Includes de arquivos--}}

    @include('site.includes.sidebar')


@endsection

{{-- caso eu queria adicionar scripts nas minhas pagina,
mas somente em paginas especificas,

caso contrario eu colocaria ele direto no meu templete
--}}

@push('scripts')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

@endpush