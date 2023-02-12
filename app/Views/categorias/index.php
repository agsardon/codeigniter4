<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
</head>
<body>
    <h1>Listado de categorías</h1>
    <a href="/categorias/new">Crear</a>
    <table>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($categorias as $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['titulo'] ?></td>
                <td>
                    <a href="/categorias/show/<?= $c['id'] ?>">Show</a>
                    <a href="/categorias/edit/<?= $c['id'] ?>">Edit</a>
                </td>
                <td>
                    <form action="/categorias/delete/<?= $c['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
