<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @section('titulo') @endsection
        </title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qXvZx/KUk9+55i1rXqYGBHskt7t33MDLzWjroVN3KEkVUrczK9GY4z3/+bt" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EQ+JC7+hxY5v5P1q5T4h1/jX55lOIw+veId/jXMnKYljvOR83aY61wy5YG" crossorigin="anonymous"></script>

    </head>
    <body>
        <main>
            @section('conteudo-principal')

            @endsection
        </main>

        @section("scripts")

        @endsection
    </body>
</html>
