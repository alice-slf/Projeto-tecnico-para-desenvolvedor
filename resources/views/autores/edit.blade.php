<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <tittle>Autor</titlle>
</head>
<body>
    <form action="{{ route('editar_autor', ['id' => $autor->id]) }}" method = "POST">
        @csrf
        <label for = "">Nome</label><br />
        <input type = "text" name = "nome" value = "{{ $autor->nome }}"><br />

        <label for = "">Ano de Nascimento</label><br />
        <input type = "date" name = "ano_Nasc" value = "{{ $autor->ano_Nasc }}"><br />

        <label for = "">Sexo</label><br />
        <input type = "text" name = "sexo" value = "{{ $autor->sexo }}"><br />

        <label for = "">Nacionalidade</label><br />
        <input type = "text" name = "nacionalidade" value = "{{ $autor->nacionalidade }}"><br />

        <button>SALVAR</button>
    </form>
</body>
</html>