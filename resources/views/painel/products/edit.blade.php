@extends('painel.templete.template')

@section('content')

<h1 class="titlepg">Editar de Produtos</h1>

{{--EXIBINDO MENSAGENS VALIDACAO--}}
@if( isset($errors) && count($errors) > 0 )

    <div class="alert alert-danger">
        @foreach ($errors->all() as $erro)
            <p>{{$erro}}</p>
        @endforeach
    </div>

@endif


<form class="form" method="post" action="{{route('produtos.update', $product->id)}}">

    {{--Diz que meu form e do tipo PUTs--}}
    {!! method_field('PUT') !!}

    {{--valida o formulario com token--}}
    {!! csrf_field() !!}



    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{$product->name}}">
    </div>

    <div class="form-group">
        <label for="status">                                            {{--verificar se esta ativo checkbox--}}
        <input type="checkbox" id="status" name="active" value="1" @if( isset($product) && $product->active == '1' ) checked @endif>
            Ativo?
        </label>
    </div>

    <div class="form-group">
        <input type="text" name="number" placeholder="Numero:" class="form-control" value="{{$product->number}}">
    </div>

    <div class="form-group">
        <select name="category" class="form-control">
            <option selected value="">Escolha a Categoria</option>

            
            @foreach ($categorys as $category) {{--verificar a categoria--}}

                <option value="{{$category}}"
                        @if( isset( $product ) && $product->category == $category )
                        selected
                @else
                    {{old('category') == $category  ? 'selected="selected"': ''}}
                        @endif
                >{{$category}}
                </option>﻿

            @endforeach




        </select>
    </div>

    <div class="form-group">
        <textarea name="description" placeholder="Descricao" class="form-control" rows="3">{{$product->description}}</textarea>
    </div>


    <div style="margin: 10px ">
        <button class="btn btn-primary">Enviar</button>
        <a href="{{route('produtos.index')}}"><button class="btn btn-dark">Inicio</button></a>
    </div>

</form>


@endsection