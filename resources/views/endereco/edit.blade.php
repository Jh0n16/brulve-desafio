@extends('main')
@section('titulo') Editar endereço @endsection

@section('conteudo-principal')
    <form action="{{ route("endereco.update", ["endereco" => $endereco->id]) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="row">
                <div class="col">
                    <label for="logradouro" class="form-label">Logradouro: </label>
                    <input type="text" name="logradouro" id="logradouro" class="form-control" value="{{ old('logradouro') }}" required>

                    <label for="numero" class="form-label">Número: </label>
                    <input type="text" name="numero" id="numero" class="form-control" value="{{ old('numero') }}" required>

                    <label for="bairro" class="form-label">Bairro: </label>
                    <input type="text" name="bairro" id="bairro" class="form-control" value="{{ old('bairro') }}" required>
                    
                </div>
                
                <div class="col">
                    <label for="cidade" class="form-label">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{ old('cidade') }}" required>
                    
                    <label for="estado" class="form-label">Estado: </label>
                    <input type="text" name="estado" id="estado" class="form-control" placeholder="Ex. RJ" value="{{ old('estado') }}" required>

                    <label for="cep" class="form-label">CEP: </label>
                    <input type="text" name="cep" id="cep" class="form-control"  value="{{ old('cep') }}" required>
        
                </div>
                <input type="hidden" name="cliente_id" value="{{ $endereco->cliente_id }}" required>
                
            </div>

            <div class="mt-3 align-items-start">
                <input type="submit" value="Enviar" class="btn btn-success">
                <a href="{{ route("endereco.index", ["cliente" => $endereco->cliente_id]) }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>

    </form>
@endsection
