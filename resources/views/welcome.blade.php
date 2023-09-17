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
    {{-- Tailwind se diferencia de Bootstrap en que no te impone ningún diseño, hace que tú lo configures todo --}}
    {{-- Aplica el centrado automático en el eje x y un ancho máximo según el tamaño de la pantalla --}}
    {{-- <div class="container mx-auto"> --}}
    <div class="container">
        <h1>Éste es un H1</h1>
        <h2>Éste es un H2</h2>
        <h3>Éste es un H3</h3>
        <h4>Éste es un H4</h4>
        <h5>Éste es un H5</h5>
        <h6>Éste es un H6</h6>
    </div>
</body>
</html>
