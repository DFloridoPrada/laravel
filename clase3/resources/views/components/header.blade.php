@props(['title' => 'Título por defecto']) 
{{-- info es el valor por defecto por si no se le pasa nada --}}

<header class="w-full h-1/8 bg-sky-50 flex items-center justify-between pl-10 pr-10">
    <!-- Título -->
    <div class="h-full w-auto flex items-center">
        <h1 class="text-2xl font-bold">{{$title}}</h1>
    </div>
    <!-- Enlaces -->
    <div class="flex gap-10">
        {{$links}}
        {{-- <a href="#" class="hover:underline cursor-pointer hover:text-red-700">Home</a>
        <a href="#" class="hover:underline cursor-pointer hover:text-red-700">Añadir tarea</a> --}}
    </div>
</header>