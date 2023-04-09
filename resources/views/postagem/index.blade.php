<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">

        <a href="{{ url('postagem/create') }}">Criar</a>

        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
    
        <table>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Visualizar</th>
            </tr>
                @foreach($postagens as $value)

                    <tr>
                        <td>{{ $value->id }}</td>
                        
                        <td>{{ $value->titulo }}</td>
                        
                        <td>
                            <a href="{{ url('postagem/' . $value->id) }}">Visualizar</a>
                            <a href="{{ url('postagem/' . $value->id.'/edit') }}">Editar</a>
                            {!! Form::open(['url' => 'postagem/' . $value->id, 'method' => 'delete']) !!}
                            {!! Form::submit ('Excluir')!!}
                            {!! Form::close()!!}
                        </td>
                    </tr>
                @endforeach
        </table>
    </body>
</html>
