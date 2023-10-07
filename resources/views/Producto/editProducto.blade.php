<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Editar producto</title>
</head>
<body class="flex justify-center">
    <div class="w-full max-w-xs">
        <h1 class="text-center mb-10 text-2xl font-mono"><br>FORMULARIO DE PRODUCTO</h1>
            <form method="POST" action="{{ route('productos.update', $producto) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf <!--cross site resource forgery-->
                @method('PATCH') <!--Apegado a rest-->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{ $producto->nombre }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="informacion">Informacion</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="informacion" id="informacion" placeholder="Información" value="{{ $producto->informacion }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">Precio</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="precio" id="precio" placeholder="Precio"  value="{{ $producto->precio }}">
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="disponible">Disponible</label>
                    <input type="radio" name="disponible" value="1" id="si_disponible">
                    <label for="disponible"> Sí </label> <br>
                    <input type="radio" name="disponible" value="0" id="no_disponible" checked>
                    <label for="no_disponible"> No </label> <br>
                </div>
                <div class="mb-4">
                    <input class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Actualizar">
                </div>
            </form>
    </div>
</body>
</html>