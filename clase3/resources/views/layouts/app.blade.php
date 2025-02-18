<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="w-screen h-screen min-h-full flex flex-col bg-[#10151b]">
    {{$slot}}
    <footer class="flex justify-center items-center w-full bg-[#1E2939] h-[3rem] text-white">
        David Florido Prada | Todos los derechos reservados
    </footer>
    @include('notify::components.notify')
    @notifyJs
</body>
</html>