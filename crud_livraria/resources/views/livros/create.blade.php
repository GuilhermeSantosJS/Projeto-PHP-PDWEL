<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo livro</title>
</head>

<body>
    <form action="{{ route('registrar_livro') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">Autor</label> <br />
        <input type="text" name="autor"> <br />
        <label for="">Editora</label> <br />
        <input type="text" name="editora"> <br />
        <label for="">ISBN</label> <br />
        <input type="text" name="isbn"> <br />
        <label for="">Idioma</label> <br />
        <input type="text" name="idioma"> <br />
        <label for="">Paginas</label> <br />
        <input type="text" name="paginas"> <br />
        <label for="">Preco</label> <br />
        <input type="text" name="preco"> <br />
        <label for="">Avaliacao do livro</label> <br />
        <input type="text" name="avaliacao_livro"> <br />
        <button>Salvar</button>






    </form>


</body>


</html>