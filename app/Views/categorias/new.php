<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear categoría</title>
</head>
<body>
    <h1>Nueva categoría</h1>
    <form action="/categorias/create" method="post">
        <?= view('categorias/_form', ['action' => 'Crear']) ?>
    </form>
</body>
</html>