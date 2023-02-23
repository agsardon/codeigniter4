<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Listado categorías</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1>Listado de categorías</h1>
    <?= view('partials/_mensaje') ?>
    <a href="/admin/categorias/new">Crear</a>
    <table>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($categorias as $c) : ?>
            <tr>
                <td><?= $c->id ?></td>
                <td><?= esc($c->titulo) ?></td>
                <td>
                    <a href="/admin/categorias/show/<?= $c->id ?>">Show</a>
                    <a href="/admin/categorias/edit/<?= $c->id ?>">Edit</a>
                </td>
                <td>
                    <form action="/admin/categorias/delete/<?= $c->id ?>" method="post">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <?= $this->endSection() ?>

