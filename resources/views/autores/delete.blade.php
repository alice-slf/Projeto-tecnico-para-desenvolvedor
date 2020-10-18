<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Autor</titlle>
</head>
<body>
    <form action="{{ route('excluir_autor', ['id' => $autor->id]) }}" method = "POST">
        @csrf
        <label for = "">Tem certeza que deseja excluir esse autor?</label><br />
        <input type = "text" name = "nome" value = "{{ $autor->nome}}"><br />
        <button>Sim</button>
    </form>

</body>
</html>