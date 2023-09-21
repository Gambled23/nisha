<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Cliente</title>
</head>
<body>
<h1>FORMULARIO DE CLIENTE</h1>
    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf <!--cross site resource forgery-->
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="correo">Correo</label><br>
        <input type="email" name="correo" id="correo" value="@gmail.com"><br>
        <label for="telefono">Telefono</label><br>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="direccion">Direccion</label><br>
        <input type="text" name="direccion" id="direccion"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
