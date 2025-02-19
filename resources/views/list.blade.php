<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

    @if ($list->isNotEmpty())
        <div class="top-4 m-auto relative overflow-x-auto shadow-md sm:rounded-lg max-w-4xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Placa do Carrro
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marca
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Modelo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Preço
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data de Lançamento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Editar</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Excluir</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    </li>
                    @foreach ($list as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->plate }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->mark }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->model }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->release_date }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('edit', $item) }}"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">Editar</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('delete', $item) }}"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->links() }}

        </div>
    @endif
</body>
</html>