<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Actualizar película</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= view('partials/_mensaje') ?>
    <form action="/admin/peliculas/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('admin/peliculas/_form', ['action' => 'Actualizar']) ?>
    </form>
<?= $this->endSection() ?>
