<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear película</title>
</head>
<body>
    <h1>Nueva película</h1>
    <form action="/peliculas/create" method="post">
        <?= view('peliculas/_form', ['action' => 'Crear']) ?>
    </form>
</body>
</html>