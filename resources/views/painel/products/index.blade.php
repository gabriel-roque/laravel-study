@extends('painel.templete.template')

@section('content')

    <h1 class="titlepg">Listagem dos produtos</h1>

    <button type="button" class="btn btn-success">Cadastrar<i class="fas fa-plus"></i></button>

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