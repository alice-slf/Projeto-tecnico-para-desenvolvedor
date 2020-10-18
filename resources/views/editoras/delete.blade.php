<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Editora</titlle>
</head>
<body>
    <form action="{{ route('excluir_editora', ['id' => $editora->id]) }}" method = "POST">
        @csrf
        <label for = "">Tem certeza que deseja excluir essa editora?</label><br />
        <input type = "text" name = "nome" value = "{{ $editora->nome}}"><br />
        <button>Sim</button>
    </form>

</body>
</html>