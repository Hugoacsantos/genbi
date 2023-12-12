<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>

<body>

    <div class="container d-flex flex-column">
        <header class="bg-dark bg-gradient">
            <x-header />
        </header>

        <form action={{route('user_update',$user->id)}} class="w-50 m-auto" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value={{$user->name}}>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value={{$user->email}}>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>
