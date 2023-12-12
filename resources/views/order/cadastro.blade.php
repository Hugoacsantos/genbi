<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro Usuario</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{route('home')}}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('user_home')}}>Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('book_home')}}>Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('order_home')}}>Emprestimos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sair</a>
                </li>
            </ul>
        </header>

        <form action={{route('order_create')}} class="w-50 m-auto" method="POST">
            @csrf @method('POST')
            <input type="text" hidden name="book_id" value={{$book->id}}></input>
            <div class="mb-3">
                <label for="" class="form-label">Livro</label>
                <input type="text" class="form-control" id="" name="" aria-describedby="emailHelp" value={{$book->title}} readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CPF do usuario</label>
                <input type="text" class="form-control" id="" name="cpf" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Autor</label>
                <input type="text" class="form-control" id="" name="author_id" value={{$book->author->name}} readonly>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>

</html>
