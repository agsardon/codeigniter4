<?= $this->extend('layouts\admin') ?>

<?= $this->section('title') ?>
    <title>Mostrar película</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1><?= esc($pelicula->titulo) ?></h1>
    <p><?= esc($pelicula->descripcion) ?></p>
<?= $this->endSection() ?>
