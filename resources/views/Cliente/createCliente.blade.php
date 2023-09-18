<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<h1>FORMULARIO DE CLIENTE</h1>
    <form action="cliente" method="POST">
        @csrf
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="correo">Correo</label><br>
        <input type="email" name="correo" id="correo"><br>


    </form>
</body>
</html>