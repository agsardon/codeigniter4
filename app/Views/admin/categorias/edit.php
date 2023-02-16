<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Actualizar categoría</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= view('partials/_mensaje') ?>
    
    <form action="/admin/categorias/update/<?= $categoria['id'] ?>" method="post">
        <?= view('admin/categorias/_form', ['action' => 'Actualizar']) ?>
    </form>
<?= $this->endSection() ?>