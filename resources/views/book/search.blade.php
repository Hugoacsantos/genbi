<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Busca</title>
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

        <h1 class="h1 d-flex justify-content-center">Livros</h1>
        <table class="table table-dark table-striped w-50 m-auto text-center">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td><a href={{route('book_details',$book->id)}}>{{$book->title}}</a></td>
                    <td><a href={{route('author_details',$book->author->id)}}>{{$book->author->name}}</a></td>
                    <td><a href={{route('book_edit',$book->id)}}>Editar</a></td>
                    <td><a href={{route('book_delete',$book->id)}}>Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
