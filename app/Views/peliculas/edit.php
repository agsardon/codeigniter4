<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar película</title>
</head>
<body>
    <form action="/peliculas/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('peliculas/_form', ['action' => 'Actualizar']) ?>
    </form>
</body>
</html>