@extends('main')
@section('titulo') Endereços @endsection

@section('conteudo-principal')
    <nav class="navbar navbar-expand-lg mb-3">
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#inserirEndereco">
                Inserir Endereco
        </button>
        <a class="btn btn-primary" href="{{ route('cliente.show', ["cliente" => $cliente->id]) }}">Voltar</a>

    </nav>

    <h2>Endereços do cliente: {{ $cliente->nome }}</h2>
    <div class="table-responsive">
        <table class="table table-hover align-middle table-borderless">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                    <tr>
                        <td> {{ $endereco->id }} </td>
                        <td> {{ $endereco->logradouro }}, N° {{ $endereco->numero }}, {{ $endereco->bairro }}, {{ $endereco->cidade }} - {{ $endereco->estado }}, {{ $endereco->cep }} </td>
                        <td class="d-flex">
                            <a class="btn btn-primary me-2" href="{{ route('endereco.edit', ["endereco" => $endereco]) }}">Editar</a>
                            <form action="{{ route("endereco.destroy", ["endereco" => $endereco->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>

    <div class="modal fade" id="inserirEndereco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inserirEnderecoLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="inserirEnderecoLabel">Inserir Endereço</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route("endereco.store") }}" method="POST">
                        @csrf
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
                            <input type="hidden" name="cliente_id" value="{{ $cliente->id }}" required>
                            
                        </div>
                        <input type="submit" value="Enviar" class="btn btn-success mt-3">

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
                
            </div>

        </div>

    </div>
@endsection