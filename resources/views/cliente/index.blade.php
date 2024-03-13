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
@endsection