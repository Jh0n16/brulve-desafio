@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    <nav>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inserirCliente">
            Inserir cliente
        </button>
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


    <!-- Modal -->
    <div class="modal fade" id="inserirCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inserirClieteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="inserirClieteLabel">Inserir cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route("cliente.store") }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="form-label">Nome: </label>
                                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}" required>

                                <label for="sobrenome" class="form-label">Sobrenome: </label>
                                <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{ old('sobrenome') }}" required>
                            </div>

                            <div class="col">
                                <label for="email" class="form-label">E-mail: </label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                                
                                <label for="dataNascimento" class="form-label">Data de Nascimento: </label>
                                <input type="date" name="dataDeNascimento" id="dataDeNascimento" class="form-control" value="{{ old('dataDeNascimento') }}" required>
                            </div>

                        </div>
                        <input type="submit" value="Enviar" class="btn btn-success">
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
                
            </div>

        </div>

    </div>
@endsection