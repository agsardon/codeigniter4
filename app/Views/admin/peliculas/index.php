<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Listado películas</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1>Listado de películas</h1>
    <?= view('partials/_mensaje') ?>
    <a href="/admin/peliculas/new">Crear</a>
    <table>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
        <?php foreach (esc($peliculas) as $p) : ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titulo'] ?></td>
                <td><?= $p['descripcion'] ?></td>
                <td>
                    <a href="/admin/peliculas/show/<?= $p['id'] ?>">Show</a>
                    <a href="/admin/peliculas/edit/<?= $p['id'] ?>">Edit</a>
                </td>
                <td>
                    <form action="/admin/peliculas/delete/<?= $p['id'] ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
<?= $this->endSection() ?>

