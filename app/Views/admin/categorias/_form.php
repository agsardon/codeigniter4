<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Título"
        value="<?= isset($categoria['titulo'])? esc($categoria['titulo']) : '' ?>"
    >
</div>
<button type="submit"><?= $action ?></button>