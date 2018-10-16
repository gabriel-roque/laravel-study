@extends('painel.templete.template')

@section('content')

<h1 class="titlepg">Cadastro de Produtos</h1>

{{--EXIBINDO MENSAGENS VALIDACAO--}}
@if( isset($errors) && count($errors) > 0 )

    <div class="alert alert-danger">
        @foreach ($errors->all() as $erro)
            <p>{{$erro}}</p>
        @endforeach
    </div>

@endif


<form class="form" method="post" action="{{route('produtos.store')}}">
    {{--Laravel quando o metodo e POST trabalha com validacao por TOKEN--}}
    {{--Alternativa 01--}}
    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

    {{--Alternativa 02 (melhor)--}}
    {!! csrf_field() !!}



    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{old('name')}}">
                                                            {{--persiste o dado dos formulario {{old('nome_campo')}} --}}
    </div>

    <div class="form-group">
        <label for="status">
        <input type="checkbox" id="status" name="active" value="1">
            Ativo?
        </label>
    </div>

    <div class="form-group">
        <input type="text" name="number" placeholder="Numero:" class="form-control" value="{{old('number')}}">
    </div>

    <div class="form-group">
        <select name="category" class="form-control">
            <option selected value="">Escolha a Categoria</option>
            @foreach ($categorys as $category)

                <option value="{{$category}}">{{$category}}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <textarea name="description" placeholder="Descricao" class="form-control" rows="3">{{old('description')}}</textarea>
    </div>

    <button class="btn btn-primary">Enviar</button>
</form>


@endsection