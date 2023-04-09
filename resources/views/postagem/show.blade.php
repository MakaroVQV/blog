<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagens</title>
    <body>

        Postagem:<br>
        <strong>id:</strong> {{ $postagem->id }} <br>
        <strong>Título:</strong> {{ $postagem->titulo }} <br>
        <strong>Conteúdo:</strong> {{ $postagem->conteudo }} <br>
        <br><br>

        Comentarios:<br>

        @foreach ($postagem->comentarios as $value)
            {{ $value->conteudo}}<br>
        @endforeach
    </body>
</html>