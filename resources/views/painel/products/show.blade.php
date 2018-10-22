@extends('painel.templete.template')

@section('content')

    <h1 class="titlepg">View de {{$product->name}}</h1>

    <p>Nome: {{$product->name}}</p>
    <p>Status: {{$product->active}}</p>
    <p>Numero: {{$product->number}}</p>
    <p>Categoria: {{$product->category}}</p>
    <p>Descricao: {{$product->description}}</p>

        <a href="{{route('produtos.index')}}"><button class="btn btn-dark">Inicio</button></a>

    <hr>

    <form method="post" action="{{route('produtos.destroy', $product->id)}}">
        {{method_field('DELETE')}}
        {!! csrf_field() !!}
        <button class="btn btn-danger">DELETAR</button>
    </form>


@endsection