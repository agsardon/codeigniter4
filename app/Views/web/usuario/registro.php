<?= $this->extend('layouts\web') ?>

<?= $this->section('title') ?>
    <title>Regristro de usuario</title>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<?= view('partials/_form-errors') ?>

<form action="<?= route_to('usuario.create') ?>" method="post">
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="contrasenya">Contraseña</label>
        <input type="password" name="contrasenya" id="contrasenya">
    </div>
    <div class="form-btn">
        <input type="submit" value="Enviar">
    </div>
</form>
    
<?= $this->endSection() ?>