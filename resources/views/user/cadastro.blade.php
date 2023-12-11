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
            <x-header />
        </header>

        <form action={{route('user_create')}} class="w-50 m-auto" method="POST">
            @csrf @method('POST')
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpf">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>
