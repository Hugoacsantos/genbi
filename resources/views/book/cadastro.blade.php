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

        <form action={{route('book_create')}} class="w-50 m-auto" method="POST">
            @csrf @method('POST')
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="emailHelp">
            </div>
            <select class="form-select" aria-label="Default select example" name="author">
                <option selected>Selecione o Author do livro</option>
                @foreach ($authors as $author)
                <option value={{$author->id}}>{{$author->name}}</option>
                @endforeach

              </select>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</body>

</html>
