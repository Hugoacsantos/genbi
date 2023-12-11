<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detalhes do Usuario</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <x-header />
        </header>


        <h1 >Detalhes do usuario</h1>

        <div>
            <h6 class="text-success">Total de {{ $user->orders->count() }} livros lidos</h6>

            <h4>Livros:</h4>

            <ul class="list-group">
                @foreach ($user->books as $book)
                    <li class="list-group-item"><a href={{route('book_details',$book->id)}}>{{$book->title}}</a></li>
                @endforeach
            </ul>

        </div>


    </div>

</body>

</html>
