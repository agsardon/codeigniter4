<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Título"
        value="<?= esc($pelicula['titulo']?? '') ?>"
    >
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion">
        <?= esc($pelicula['descripcion']?? '') ?>
    </textarea>
</div>
<button type="submit"><?= $action ?></button>
