@extends('main')
@section('titulo') Endereços @endsection

@section('conteudo-principal')
    <nav>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inserirEndereco">
                Inserir Endereco
        </button>
        <a class="btn btn-primary" href="{{ route('cliente.show', ["cliente" => $cliente->id]) }}">Voltar</a>

    </nav>

    <section>
        <h2>Endereços do cliente: {{ $cliente->nome }}</h2>
        <table class="table">
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
                        <td>
                            {{ $endereco->logradouro }}, N° {{ $endereco->numero }}, {{ $endereco->bairro }}, {{ $endereco->cidade }} - {{ $endereco->estado }}, {{ $endereco->cep }}
                        </td>
                        <td class="flex">
                            <a class="btn btn-primary" href="{{ route('endereco.edit', ["endereco" => $endereco]) }}">Editar</a>
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
    </section>

    <div class="modal fade" id="inserirEndereco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inserirEnderecoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
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
                                <label for="logradouro">Logradouro: </label>
                                <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro') }}">
        
                                <label for="numero">Número: </label>
                                <input type="text" name="numero" id="numero" value="{{ old('numero') }}">
                                
                                <label for="bairro">Bairro: </label>
                                <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}">
                                
                                <input type="submit" value="Enviar" class="btn btn-success">
                            </div>
                            
                            <div class="col">
                                <label for="cidade">Cidade: </label>
                                <input type="text" name="cidade" id="cidade" value="{{ old('cidade') }}">
        
                                <label for="estado">Estado: </label>
                                <input type="text" name="estado" id="estado" placeholder="Ex. RJ" value="{{ old('estado') }}">
        
                                <label for="cep">CEP: </label>
                                <input type="text" name="cep" id="cep" value="{{ old('cep') }}">
        
                            </div>
                            <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">

                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
                
            </div>

        </div>

    </div>
@endsection