
<form method="POST" action="editar.php?indice=<?= $key; ?>">
    <legend>Formulario Actualizar Libro</legend>

    <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" name="Descripcion" class="form-control" title="Descripcion" value = "<?= $descripcion; ?>">
    </div>

    <div class="form-group">
        <label for="">Modelo</label>
        <input type="text" name="Modelo"  class="form-control" title="Modelo" value = "<?= $modelo; ?>">
    </div>

    <div class="form-group">
    <label for="">Categoría</label>
      <select class="custom-select" name="Categoria">
            <?php foreach ($categorias as $key =>$cat):?>
                <option <?= ($categoria == $cat) ? "selected":null ?>   value="<?=$key?>"><?=$cat?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Stock</label>
        <input type="number" name="Unidades"  class="form-control" title="Género" value = "<?= $unidades; ?>">
    </div>

    <div class="form-group">
        <label for="">Precio</label>
        <input type="number" step="0.01" name="Precio"  class="form-control" title="Precio" value = "<?= $precio; ?>">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" >Actualizar</button>
    
</form>

