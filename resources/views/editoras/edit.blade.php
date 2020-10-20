<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Editora</titlle>
</head>
<body>
    <form action="{{ route('editar_editora', ['id' => $editora->id]) }}" method = "POST">
        @csrf
        <label for = "">Nome</label><br />
        <input type = "text" name = "nome" value = "{{ $editora-> nome}}"><br />
        
        <button>SALVAR</button>
    </form>

</body>
</html>