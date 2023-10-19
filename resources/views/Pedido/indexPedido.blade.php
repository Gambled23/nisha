<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PEDIDO</title>
</head>
<body>
    <h1>Listado de pedidos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Identificador</th>
                <th>Total</th>
                <th>Envio</th>
                <th>Terminos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->cliente->nombre}}</td>
                    <td>{{$pedido->identificador}}</td>
                    <td>{{$pedido->total}}</td>
                    <td>{{$pedido->envio}}</td>
                    <td>{{$pedido->terminos}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>