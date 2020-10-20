<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Genero</titlle><br />
</head>
<body>
    <form action="{{ route('editar_genero', ['id' => $genero->id]) }}" method = "POST">
        @csrf
        <label for = "">Nome</label><br />
        <input type = "text" name = "genero" value = "{{ $genero->genero}}"><br />
        <button>SALVAR</button>
    </form>

</body>
</html>