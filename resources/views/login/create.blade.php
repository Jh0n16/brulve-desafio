@extends('main')
@section('titulo') Registrar @endsection

@section('conteudo-principal')
    <div class="container-sm justify-content-arround mt-3">
        <form action="{{ route('user.store') }}" method="post">
            @csrf

            <label for="name" class="form-label">Username: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">

            <label for="email" class="form-label">Email: </label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">

            <label for="password" class="form-label">Password: </label>
            <input type="password" name="password" id="password" class="form-control">

            <input type="submit" value="Registrar" class="btn btn-success mt-3">

        </form>

    </div>
@endsection