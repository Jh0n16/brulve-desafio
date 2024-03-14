@extends('main')
@section('titulo') Endereços @endsection

@section('conteudo-principal')
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inserirEndereco">
            Inserir Endereco
    </button>

    <div class="modal fade" id="inserirEndereco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inserirEnderecoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="inserirEnderecoLabel">Inserir Endereço</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route("endereco.store") }}" method="POST">
                        @csrf
                        <label for="logradouro">Logradouro: </label>
                        <input type="text" name="logradouro" id="logradouro">
                        
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro">

                        <label for="numero">Número: </label>
                        <input type="number" name="numero" id="numero" size="4">

                        <label for="cidade">Cidade: </label>
                        <input type="text" name="cidade" id="cidade">

                        <label for="estado">Estado: </label>
                        <input type="text" name="estado" id="estado" placeholder="Ex. RJ">  

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
                
            </div>

        </div>

    </div>
@endsection