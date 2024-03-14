@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    @if(session('mensagem'))
        <div class="alert alert-info" id="alertas">
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
                    <td class="d-flex">
                        <a class="btn btn-primary me-2" href="{{ route("cliente.edit", ["cliente" => $cliente->id]) }}">Editar</a>
                        <form action="{{ route('cliente.destroy', ["cliente" => $cliente->id]) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
        
    </table>    
@endsection