<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="text-center mb-10 text-2xl font-mono"><br>INFORMACIÓN EN DB</h1>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nombre</th>
                                <th scope="col" class="px-6 py-4">Información</th>
                                <th scope="col" class="px-6 py-4">Precio</th>
                                <th scope="col" class="px-6 py-4">Disponible</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                
                                <td class="whitespace-nowrap px-6 py-4 font-medium"><a href ="{{ route('productos.show', $producto)}}">{{ $producto->nombre }}</a></td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $producto->informacion }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">$ {{ $producto->precio }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $producto->disponible }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>