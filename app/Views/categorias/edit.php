<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
</head>
<body>
    <form action="/categorias/update/<?= $categoria['id'] ?>" method="post">
        <?= view('categorias/_form', ['action' => 'Actualizar']) ?>
    </form>
</body>
</html>