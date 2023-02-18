<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Crear película</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1>Crear película</h1>
    <?= view('partials/_form-errors') ?>
    <form action="/admin/peliculas/create" method="post">
        <?= view('admin/peliculas/_form', ['action' => 'Crear']) ?>
    </form>
<?= $this->endSection() ?>
