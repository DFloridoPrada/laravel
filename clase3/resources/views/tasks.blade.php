<x-app-layout>
    <x-header title="Gestor de tareas" :array="[['Inicio', '/'], ['Tareas', '/tareas'], ['Contacto', '/contacto']]"/>
    <a href="" class="px-3 py-2 bg-sky-800">Añadir una nueva tarea</a>
    <div class="shadow-md flex-grow flex flex-col justify-center items-center">
        <table class="min-w-2/3 max-w-2/3 w-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 h-2/3">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descripción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$task -> name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$task -> description}}
                        </td>
                        <td class="px-6 py-4">
                            @if ($task -> completed)
                                Completada
                            @else
                                No completada
                            @endif  
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tasks -> links() }}
    </div>

</x-app-layout>