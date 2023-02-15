<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
</head>
<body>
    
    <?= view('partials/_mensaje') ?>
    
    <form action="/admin/categorias/update/<?= $categoria['id'] ?>" method="post">
        <?= view('admin/categorias/_form', ['action' => 'Actualizar']) ?>
    </form>
</body>
</html>