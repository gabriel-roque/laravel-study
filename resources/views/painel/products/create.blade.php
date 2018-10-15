@extends('painel.templete.template')

@section('content')

<h1 class="titlepg">Cadastro de Produtos</h1>

<form class="form" method="post" action="{{route('produtos.store')}}">
    {{--Laravel quando o metodo e POST trabalha com validacao por TOKEN--}}
    {{--Alternativa 01--}}
    {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

    {{--Alternativa 02 (melhor)--}}
    {!! csrf_field() !!}



    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>

    <div class="form-group">
        <label for="status">
        <input type="checkbox" id="status" name="active" value="1">
            Ativo?
        </label>
    </div>

    <div class="form-group">
        <input type="text" name="number" placeholder="Numero:" class="form-control">
    </div>

    <div class="form-group">
        <select name="category" class="form-control">
            <option selected>Escolha a Categoria</option>
            @foreach ($categorys as $category)

                <option value="{{$category}}">{{$category}}</option>

            @endforeach
        </select>
    </div>

    <div class="form-group">
        <textarea name="description" placeholder="Descricao" class="form-control" rows="3"></textarea>
    </div>

    <button class="btn btn-primary">Enviar</button>
</form>


@endsection