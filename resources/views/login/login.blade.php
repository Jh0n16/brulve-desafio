@extends('main')
@section('titulo') Login @endsection

@section('conteudo-principal')
    <div class="container-sm justify-content-arround mt-3">
        <form action="{{ route('login.auth') }}" method="post">
            @csrf

            <label for="email" class="form-label">Email: </label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">

            <label for="password" class="form-label">Password: </label>
            <input type="password" name="password" id="password" class="form-control">

            <input type="submit" value="Login" class="btn btn-success mt-3">

        </form>

        <a href="{{ route('login.create') }}">Não possui um usuário? Clique aqui.</a>

    </div>
@endsection