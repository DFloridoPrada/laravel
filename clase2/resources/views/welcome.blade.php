{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página inicial</h1>
    <x-alert>
        <x-slot name="title">
            Ejemplo titulo alerta
        </x-slot>
        Ejemplo de alerta
    </x-alert>
</body>
</html> --}}

<x-app-layout>
    <x-slot name='content'>
        <h1>HOLA MUNDO</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio magni aperiam repudiandae incidunt cumque dolor saepe amet nobis perferendis, dignissimos quibusdam atque minus consequuntur praesentium voluptatum molestias animi iste modi.
        </p>
    </x-slot>
</x-app-layout>