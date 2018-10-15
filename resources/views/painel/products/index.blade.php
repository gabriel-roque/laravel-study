@extends('painel.templete.template')

@section('content')

    <h1 class="titlepg">Listagem dos produtos</h1>

    {{--{{url('painel/produtos/create')}} (PODE SER USADO ASSIM PARA APONTAR A URL)--}}
    <a href="{{route('produtos.create')}}">
        <button type="button" class="btn btn-success">Cadastrar<i class="fas fa-plus"></i></button>
    </a>

    <table class="table table-striped table-dark">
        <tr>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Acoes</th>
        </tr>

        @foreach ($products as $product)

            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

        @endforeach
    </table>

@endsection