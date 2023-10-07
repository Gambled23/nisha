<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Clientes</title>
</head>
<body>
<h1 class="text-center mb-10 text-2xl font-mono"><br>CLientes</h1>
    <button class="bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 mx-6 rounded"><a href="{{ route('cliente.create') }}">Crear Cliente</a></button><br><br>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nombre</th>
                                <th scope="col" class="px-6 py-4">Correo</th>
                                <th scope="col" class="px-6 py-4">Teléfono</th>
                                <th scope="col" class="px-6 py-4">Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($clientes as $cliente)

                            <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cliente->nombre }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cliente->correo }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cliente->telefono }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cliente->direccion }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">  ||  <a href ="{{ route('cliente.edit', $cliente)}}">Editar</td>
                                <td><form action="{{ route('cliente.destroy', $cliente )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>