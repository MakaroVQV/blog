<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postagem</title>
           
    </head>
    <body>
        {!! Form::open(['url' => 'postagem/' . $postagem->id, 'method' => 'put'])!!}

            {{ Form::label('titulo', 'Titulo') }}<br>
            {{ Form::text('titulo', $postagem->titulo) }}<br>

            {{ Form::label('descricao', 'Descricao') }}<br>
            {{ Form::text('descricao', $postagem->descricao) }}<br>

            {{ Form::label('conteudo', 'Conteudo') }}<br>
            {{ Form::text('conteudo', $postagem->conteudo) }}<br>

            {{ Form::submit('enviar') }}<br>

        {!! Form::close()!!}
    </body>
</html>