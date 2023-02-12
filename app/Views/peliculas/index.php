<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
</head>
<body>
    <h1>Listado de películas</h1>
    <a href="/peliculas/new">Crear</a>
    <table>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($peliculas as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href="/peliculas/show/<?= $p['id'] ?>">Show</a>
                    <a href="/peliculas/edit/<?= $p['id'] ?>">Edit</a>
                </td>
                <td>
                    <form action="/peliculas/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>

