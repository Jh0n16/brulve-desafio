@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    @if(session('mensagem'))
        <div class="alert alert-dark">
            <p>{{ session('mensagem') }}</p>
        </div>
    @endif

    <nav>
        <a href="{{ route("cliente.create") }}">Inserir cliente</a>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }} </td>
                    <td><a href="{{ route("cliente.show", ["cliente" => $cliente->id]) }}"> {{ $cliente->nome }} </a></td>
                    <td> {{ $cliente->email }} </td>
                    <td>
                        <a href="{{ route("cliente.destroy") }}">Excluir</a>
                        <a href="{{ route("cliente.edit") }}">Editar</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
        
    </table>    
@endsection