@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    <form action="{{ route("cliente.update", ["cliente" => $cliente->id]) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome: </label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>

                <label for="sobrenome" class="form-label">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{ old("sobrenome", $cliente->sobrenome) }}" required>
                
                <label for="tipo" class="form-label">Tipo de cliente: </label>
                <select name="tipo" id="tipo" class="form-select">
                    <option value="fisico">Pessoa Física</option>
                    <option value="juridico">Pessoa Jurídica</option>
                </select>
            </div>

            <div class="col">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old("email", $cliente->email) }}" required>
                
                <label for="dataNascimento" class="form-label">Data de Nascimento: </label>
                <input type="date" name="dataDeNascimento" id="dataDeNascimento" class="form-control" value="{{ old("dataDeNascimento", $cliente->dataDeNascimento) }}" required>
            </div>

        </div>
        <div class="mt-2">
            <input type="submit" value="Enviar" class="btn btn-success grid gap-3">
            <a href="{{ route('cliente.index') }}" class=" btn btn-primary">Voltar</a>
        </div>

    </form>
    
@endsection