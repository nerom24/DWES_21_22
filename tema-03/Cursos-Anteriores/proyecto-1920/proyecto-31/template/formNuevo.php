
<form method="POST" action="nuevo.php">
    <legend>Formulario Añadir Artículo</legend>

    <div class="form-group">
        <label for="">Descripción</label>
        <input type="text" name="Descripcion" class="form-control" required="required" title="Título">
    </div>

    <div class="form-group">
        <label for="">Modelo</label>
        <input type="text" name="Modelo"  class="form-control" required="required" title="Autor">
    </div>

     <div class="form-group">
        <label for="">Categoría</label>
        <select class="custom-select" name="Categoria">
            <?php foreach ($categorias as $key =>$categoria):?>
                <option value="<?=$key?>"><?=$categoria?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Stock</label>
        <input type="number" name="Unidades"  class="form-control" required="required" title="Género">
    </div>

    <div class="form-group">
        <label for="">Precio</label>
        <input type="number" step="any" name="Precio"  class="form-control" required="required" title="Precio">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary" >Añadir</button>
    
</form>

