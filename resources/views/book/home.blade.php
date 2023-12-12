<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Livros</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <x-header />
        </header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href={{route('book_register')}}>Cadastrar Livro</a>
              <form action={{route('book_find_by_title')}} class="d-flex">
                <input class="form-control me-2" type="search" name="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </nav>


        <h1 class="h1 d-flex justify-content-center">Livros</h1>
        <table class="table table-dark table-striped w-50 m-auto text-center">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Author</th>
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
