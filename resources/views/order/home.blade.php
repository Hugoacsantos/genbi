<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Emprestimos</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <x-header />
        </header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href={{ route('order_register') }}>Cadastrar Emprestimo</a> --}}
                <form action={{ route('book_find_by_title') }} class="d-flex">
                    <input class="form-control me-2" type="search" name="busca" placeholder="Buscar por CPF"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>


        <h1 class="h1 d-flex justify-content-center">Emprestimos Abertos</h1>
        <table class="table table-dark table-striped w-50 m-auto text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Livro</th>
                    <th scope="col">Concluido devolução</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td><a href="">{{$order->id}}</a></td>
                        <td><a href={{route('user_details',$order->user->id)}}>{{ $order->user->name }}</a></td>
                        <td><a href={{route('book_details',$order->book->id)}}>{{ $order->book->title }}</a></td>
                        <td><a  href={{route('order_close',$order->id)}}> @method('put') @csrf Devolvido</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>




    </div>

</body>

</html>
