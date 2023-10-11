<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Nuevo cliente</title>
</head>
<body class="flex justify-center">
    <div class="w-full max-w-xs">
        <h1 class="text-center mb-10 text-2xl font-mono"><br>FORMULARIO DE CLIENTE</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
             </div>
         @endif

            <form method="POST" action="{{ route('cliente.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf <!--cross site resource forgery-->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{old('nombre')}}>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="correo" id="correo" placeholder="@example.com" value="{{old('correo')}}>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="telefono">Teléfono</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="telefono" id="telefono" placeholder="Teléfono" value="{{old('telefono')}}>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Direccion</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="direccion" id="direccion" placeholder="Dirección" value="{{old('direccion')}}> <br><br>
                </div>
                <div class="mb-4">
                    <input class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Enviar">
                </div>
            </form>
    </div>
</body>
</html>