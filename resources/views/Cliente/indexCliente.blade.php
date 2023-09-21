<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table-auto">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                @foreach ($clientes as $cliente)
                <td>{{ $cliente->nombre }}</td>
        <p>{{ $cliente->correo }}</p>
        <p>{{ $cliente->telefono }}</p>
        <p>{{ $cliente->direccion }}</p>
        <br>
    @endforeach
</body>
</html>