<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Crear categoría</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1>Nueva categoría</h1>
    <?= view('partials/_form-errors') ?>
    <form action="/admin/categorias/create" method="post">
        <?= view('admin/categorias/_form', ['action' => 'Crear']) ?>
    </form>
<?= $this->endSection() ?>
