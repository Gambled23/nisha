<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Editar cliente</title>
</head>
<body class="flex justify-center">
    <div class="w-full max-w-xs">
        <h1 class="text-center mb-10 text-2xl font-mono"><br>FORMULARIO DE CLIENTE</h1>
            <form method="POST" action="{{ route('cliente.update', $cliente) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf <!--cross site resource forgery-->
                @method('PATCH') <!--Apegado a rest-->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{ $cliente->nombre }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="correo" id="correo" placeholder="Correo" value="{{ $cliente->correo }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="telefono">Telefono</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="telefono" id="telefono" placeholder="Telefono"  value="{{ $cliente->telefono }}">
                </div>
                <div class="mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="direccion" id="direccion" placeholder="Direccion"  value="{{ $cliente->direccion }}">
                </div>
                <div class="mb-4">
                <div class="mb-4">
                    <input class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Actualizar">
                </div>
            </form>
    </div>
</body>
</html>