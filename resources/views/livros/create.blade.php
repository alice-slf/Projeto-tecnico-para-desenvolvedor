<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Livro</titlle><br />
</head>
<body>
    <form action="{{ route('registrar_livro') }}" method = "POST">
        @csrf
        <label for = "">Autor</label><br />
        <input type = "text" name = "autor"><br />

        <label for = "">Genero Literario</label><br />
        <input type = "text" name = "genero_Literario"><br />

        <label for = "">Editora</label><br />
        <input type = "text" name = "editora"><br />

        <label for = "">Titulo</label><br />
        <input type = "text" name = "titulo"><br />

        <label for = "">Ano de Lancamento</label><br />
        <input type = "text" name = "ano_Lancamento"><br />

        <button>SALVAR</button>
    </form>
</body>
</html>