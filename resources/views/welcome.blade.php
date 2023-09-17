<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & Tailwind</title>

    {{-- Incluir tailwind --}}
    @vite('resources/css/app.css')
</head>
<body>
    {{-- Se logró este comportamiento a través de tailwind.config.js --}}
    {{-- <div class="container mx-auto"> --}}
    <div class="container">
        {{-- Grid de tailwind --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-16 gap-4">
            <div class="bg-blue-200">A</div>
            <div class="bg-blue-300">B</div>
            <div class="bg-blue-400">C</div>
            <div class="bg-blue-500">D</div>
            <div class="bg-blue-600">E</div>
            <div class="bg-blue-700">F</div>
            <div class="bg-blue-200">G</div>
            <div class="bg-blue-300">H</div>
            <div class="bg-blue-400">I</div>
            <div class="bg-blue-500">J</div>
            <div class="bg-blue-600">K</div>
            <div class="bg-blue-700">L</div>
            <div class="bg-blue-200">M</div>
            <div class="bg-blue-300">N</div>
            <div class="bg-blue-400">O</div>
            <div class="bg-blue-500">P</div>
        </div>
    </div>
</body>
</html>
