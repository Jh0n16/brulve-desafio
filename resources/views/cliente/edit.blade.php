@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')

    @if($errors->any())
        <div class="alert alert-dark">
            @foreach($errors->any() as $erro)
                <p> {{ $erro }} </p>
            @endforeach
        </div>
    @endif

    <form action="{{ route("cliente.update", ["cliente" => $cliente->id]) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome: </label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>

                <label for="sobrenome" class="form-label">Sobrenome: </label>
                <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{ old("sobrenome", $cliente->sobrenome) }}" required>
            </div>

            <div class="col">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old("email", $cliente->email) }}" required>
                
                <label for="dataNascimento" class="form-label">Data de Nascimento: </label>
                <input type="date" name="dataDeNascimento" id="dataDeNascimento" class="form-control" value="{{ old("dataDeNascimento", $cliente->dataDeNascimento) }}" required>
            </div>

        </div>
        <input type="submit" value="Enviar" class="btn btn-success">

    </form>
    
@endsection