<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Livro</titlle><br />
</head>
<body>
    <form action="{{ route('excluir_livro', ['id' => $livro->id]) }}" method = "POST">
        @csrf
        <label for = "">Tem certeza que deseja excluir esse livro?</label><br />
        <input type = "text" name = "titulo" value = "{{ $livro->titulo}}"><br />
        <button>Sim</button>
    </form>

</body>
</html>