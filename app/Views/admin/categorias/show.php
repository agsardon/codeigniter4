<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Mostrar categoría</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1><?= esc($categoria->titulo) ?></h1>
<?= $this->endSection() ?>