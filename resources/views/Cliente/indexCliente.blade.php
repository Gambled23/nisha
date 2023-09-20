<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTADO DE NORMAS xd<h1>
    @foreach ($clientes as $cliente)
        <p>{{ $cliente->nombre }}</p>
        <p>{{ $cliente->correo }}</p>
        <p>{{ $cliente->telefono }}</p>
        <p>{{ $cliente->direccion }}</p>
    @endforeach
</body>
</html>