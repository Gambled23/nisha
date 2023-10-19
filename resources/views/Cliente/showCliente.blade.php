<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Show Cliente</title>
</head>
<body>

<h1>Detalle del cliente</h1>

<h2>Nombre del Cliente: {{$cliente->nombre}}</h2>

<ul>
    @foreach ($cliente->pedidos as $pedido)
        <li>
            {{$pedido->identificador}}
        </li>
    @endforeach
<ul>

</body>
</html>