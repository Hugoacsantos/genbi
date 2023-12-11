<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <x-header />
        </header>


        <h1 class="pt-5 pb-5 text-center">Ultimas atualizações</h1>
        <table class="table table-dark table-striped w-50 m-auto text-center ">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data</th>
                    <th scope="col">Id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->books->title}}</td>
                    <td>{{date('d-m-Y',strtotime($order->created_at))}}</td>
                    <td>{{$order->id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
