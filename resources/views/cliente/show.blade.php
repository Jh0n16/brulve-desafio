@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    <nav>
        <a href="{{ route("cliente.index") }}">Visualizar clientes</a>
    </nav>

    <p>Id: {{ $cliente->id }}</p>
    <p>Nome: {{ $cliente->nome }}</p>
    <p>Sobrenome: {{ $cliente->sobrenome }}</p>
    <p>Data de Nascimento: {{ \Carbon\Carbon::parse($cliente->dataDeNascimento)->tz("America/Sao_Paulo")->format("d/m/Y") }}</p>
    <p>Criado em: {{ \Carbon\Carbon::parse($cliente->created_at)->tz("America/Sao_Paulo")->format("d/m/Y - H:i:s") }}</p>
    <p>Editado em: {{ \Carbon\Carbon::parse($cliente->updated_at)->tz("America/Sao_Paulo")->format("d/m/Y - H:i:s") }}</p>
    
@endsection