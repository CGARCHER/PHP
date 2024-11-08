<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi web de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/style.css">
</head>
<body>
    <header>
        <h1>Mis productos</h1>
    </header>
    <nav class="nav justify-content-center">
        <a class="nav-link" href="<?= BASE_URL ?>/producto/lista">Listado</a> 
        <a class="nav-link" href="<?= BASE_URL ?>/producto/nuevo">Añadir</a> 
        <a class="nav-link" href="<?= BASE_URL ?>/producto/search">Buscar</a>
    </nav>