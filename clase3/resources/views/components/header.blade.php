@props(['title' => 'Título por defecto']) 
@props(['links' => []]) 
{{-- info es el valor por defecto por si no se le pasa nada --}}

<header class="w-full h-[5rem] bg-[#1E2939] flex items-center justify-between pl-10 pr-10">
    <!-- Título -->
    <div class="h-full w-auto flex items-center">
        <h1 class="text-2xl font-bold font-[Raleway] text-white">{{$title}}</h1>
    </div>
    <!-- Enlaces -->
    <div class="flex gap-10 flex-wrap">
        {!! $links !!}
    </div>
</header>