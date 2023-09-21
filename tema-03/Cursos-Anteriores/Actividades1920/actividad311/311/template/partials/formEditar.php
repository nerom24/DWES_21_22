<form method="POST" action="editar.php?indice=<?= $indice ?>">
    <legend>Editar Articulo</legend>
    <div class="form-group">
        <label for="">Id</label>
        <input disabled type="text" class="form-control" id="" value="<?= $articulo["id"] ?>">
        <input hidden name="id" type="text" class="form-control" id="" value="<?= $articulo["id"] ?>">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <input name="descripcion" type="text" class="form-control" id="" value="<?= $articulo["descripcion"] ?>">
    </div>
    <div class="form-group">
        <label for="">Modelo</label>
        <input name="modelo" type="text" class="form-control" id="" value="<?= $articulo["modelo"] ?>">
    </div>
    <div class="form-group">
      <label for="">Categoria</label>
      <select class="form-control" name="categoria" id="">
      <?php foreach($categorias as $key => $categoria): ?>
        <?php if ($categoria == $articulo["categoria"]):?>
            <option value="<?= $key ?>" selected="selected">
                <?= $categoria ?>
            </option>
        <?php else:?>
            <option value="<?= $key ?>"><?= $categoria ?></option>
        <?php endif; ?>
        
      <?php endforeach; ?>

      </select>
    </div>
    <div class="form-group">
        <label for="">Unidades</label>
        <input name="unidades" type="text" class="form-control" id="" value="<?= $articulo["unidades"] ?>">
    </div>
    <div class="form-group">
        <label for="">Precio</label>
        <input name="precio" type="number" step="0.01" class="form-control" id="" value="<?= $articulo["precio"] ?>">
    </div>

    <button class="btn btn-danger" type="reset">Reset</button>
    <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>

</form>