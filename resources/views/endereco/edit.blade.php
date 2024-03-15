@extends('main')
@section('titulo') Editar endereço @endsection

@section('conteudo-principal')
    <form action="{{ route("endereco.update", ["endereco" => $endereco->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="logradouro">Logradouro: </label>
                <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $endereco->logradouro) }}">

                <label for="numero">Número: </label>
                <input type="text" name="numero" id="numero" value="{{ old('numero', $endereco->numero) }}">
                
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro" value="{{ old('bairro', $endereco->bairro) }}">
                
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
            
            <div class="col">
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" value="{{ old('cidade', $endereco->cidade) }}">

                <label for="estado">Estado: </label>
                <input type="text" name="estado" id="estado" placeholder="Ex. RJ" value="{{ old('estado', $endereco->estado) }}">

                <label for="cep">CEP: </label>
                <input type="text" name="cep" id="cep" value="{{ old('cep', $endereco->cep) }}">

            </div>
            <input type="hidden" name="cliente_id" value="{{ $endereco->cliente_id }}">

        </div>

    </form>
@endsection
