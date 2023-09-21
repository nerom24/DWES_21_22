<form method="POST" action="nuevo.php">
    <legend>Añadir Articulo</legend>
    <div class="form-group">
        <label for="">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="" placeholder="Descripción">
    </div>
    <div class="form-group">
        <label for="">Modelo</label>
        <input name="modelo" type="text" class="form-control" id="" placeholder="Modelo">
    </div>
    <div class="form-group">
      <label for="">Categoria</label>
      <select class="form-control" name="categoria" id="">

      <?php foreach($categorias as $key => $categoria): ?>
        <option value="<?= $key ?>"><?= $categoria ?></option>
      <?php endforeach; ?>
      
      </select>
    </div>
    <div class="form-group">
        <label for="">Unidades</label>
        <input name="unidades" type="number" class="form-control" id="" placeholder="Unidades" step="1">
    </div>
    <div class="form-group">
        <label for="">Precio</label>
        <input name="precio" type="number" step="0.01" class="form-control" id="" placeholder="Precio">
    </div>

    <button class="btn btn-danger" type="reset">Reset</button>
    <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
    <button type="submit" formaction="nuevo.php" class="btn btn-primary">Añadir</button>

</form>