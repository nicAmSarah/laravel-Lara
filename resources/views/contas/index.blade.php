<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>

    <a href="{{ route('conta.create')}}">Cadastrar Conta</a><br>

    <h2>Listar as Contas</h2>

    <a href="{{ route('conta.show')}}">Visualizar</a><br>
    <a href="{{ route('conta.edit')}}">Editar</a><br>
    {{--<a href="{{ route('conta.destroy')}}">Apagar</a><br>--}}

</body>

</html>
