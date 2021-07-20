<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver um Livro</title>
</head>
<body>
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $livro->nome }}"> <br />
        <label for="">Autor</label> <br />
        <input type="text" name="autor" value="{{ $livro->autor }}"> <br />
        <label for="">Editora</label> <br />
        <input type="text" name="editora" value="{{ $livro->editora }}"> <br />
        <label for="">ISBN</label> <br />
        <input type="text" name="isbn" value="{{ $livro->isbn }}"> <br />
        <label for="">Idioma</label> <br />
        <input type="text" name="idioma" value="{{ $livro->idioma }}"> <br />
        <label for="">Paginas</label> <br />
        <input type="text" name="paginas" value="{{ $livro->paginas }}"> <br />
        <label for="">Preco</label> <br />
        <input type="text" name="preco" value="{{ $livro->preco }}"> <br />
        <label for="">Avaliacao do livro</label> <br />
        <input type="text" name="avaliacao_livro" value="{{ $livro->avaliacao_livro }}"> <br />


</body>
</html>