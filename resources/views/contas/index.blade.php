<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <h2>
        Listar as contas
    </h2>
    <ul>
        <li><a href="{{route('conta.create')}}">Cadastrar</a></li>
        <li><a href="{{route('conta.show')}}">Visualizar</a></li>
        <li><a href="{{route('conta.edit')}}">Editar</a></li>
        <!-- <li><a href="{{route('conta.destroy')}}">Apagar</a></li> -->

    </ul>
</body>

</html>