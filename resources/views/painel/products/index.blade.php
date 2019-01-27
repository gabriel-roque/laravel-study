@extends('painel.templete.template')

@section('content')


    @component('components.navbar')
        Pesquisar
        {{--alocar dados na $slot--}}
        @slot('erro')
            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>
        @endslot
    @endcomponent

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
            <th>Contagem por $loop</th>
        </tr>

        @foreach ($products as $product)

            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('produtos.edit', $product->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{route('produtos.show', $product->id)}}">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                <td>
                    <span class="btn badge-secondary">

                        <span class="badge badge-primary">{{$loop->index+1}}</span> /
                        <span class="badge badge-danger">{{$loop->count}}</span>

                    </span>
                </td>
            </tr>

        @endforeach
    </table>

@endsection