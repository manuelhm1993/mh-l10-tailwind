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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 16; $i++)
                @php
                    $resta = 5;

                    if($i < 7) {
                        $tonalidad = ($i + 1) * 100;
                    }
                    else if($i < 12) {
                        $tonalidad = (($i - $resta) + 1) * 100;
                    }
                    else {
                        $tonalidad = (($i - ($resta * 2)) + 1) * 100;
                    }
                @endphp

                <div class="bg-blue-{{ $tonalidad }}">{{ chr($i + 65) }}</div>
            @endfor
        </div>
    </div>
</body>
</html>
