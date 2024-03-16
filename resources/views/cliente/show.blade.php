@extends('main')
@section('titulo')
    Clientes
@endsection

@section('conteudo-principal')
    <nav class="navbar navbar-expand-lg mb-3">
        <a class="btn btn-primary me-2" href="{{ route("cliente.index") }}">Visualizar clientes</a>
        <a class="btn btn-success" href="{{ route('endereco.index', ["cliente" => $cliente->id]) }}">Cadastrar endereço</a>
    </nav>
    <section>
        <dl class="row align-items-center justify-content-center">
            <dt class="col-sm-3">ID:</dt>
            <dd class="col-sm-9">
                <p class="lead">{{ $cliente->id }}</p>
            </dd>
            
            <dt class="col-sm-3">Tipo: </dt>
            <dd class="col-sm-9">
                <p class="lead">
                    @if($cliente->tipo === 'fisico')
                        Pessoa Física
                    @elseif($cliente->tipo === 'juridico')
                        Pessoa Jurídica
                    @endif
                </p>
                
            <dt class="col-sm-3">Nome: </dt>
            <dd class="col-sm-9">
                <p class="lead">{{ $cliente->nome }}</p>
                
            </dd>
            
            </dd>
            <dt class="col-sm-3">Sobrenome: </dt>
            <dd class="col-sm-9">
                <p class="lead">{{ $cliente->sobrenome }}</p>
                
            </dd>

            <dt class="col-sm-3">Data de Nascimento: </dt>
            <dd class="col-sm-9">
                <p class="lead">{{ \Carbon\Carbon::parse($cliente->dataDeNascimento)->tz("America/Sao_Paulo")->format("d/m/Y") }}</p>
                
            </dd>

            <dt class="col-sm-3">Criado em: </dt>
            <dd class="col-sm-9">
                <p class="lead">{{ \Carbon\Carbon::parse($cliente->created_at)->tz("America/Sao_Paulo")->format("d/m/Y - H:i:s") }}</p>
                
            </dd>

            <dt class="col-sm-3">Editado em:</dt>
            <dd class="col-sm-9">
                <p class="lead">{{ \Carbon\Carbon::parse($cliente->updated_at)->tz("America/Sao_Paulo")->format("d/m/Y - H:i:s") }}</p>
                
            </dd>
        </dl>

    </section>
    
@endsection