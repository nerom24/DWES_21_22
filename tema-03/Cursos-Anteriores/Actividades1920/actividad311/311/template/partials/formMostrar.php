<form method="POST" action="editar.php?indice=<?= $indice ?>">
    <legend>Mostrar Articulo</legend>
    <div class="form-group">
        <label for="">Id</label>
        <input disabled type="text" class="form-control" id="" value="<?= $articulo["id"] ?>">
        <input hidden name="id" type="text" class="form-control" id="" value="<?= $articulo["id"] ?>">
    </div>
    <div class="form-group">
        <label for="">Descripción</label>
        <input disabled name="descripcion" type="text" class="form-control" id="" value="<?= $articulo["descripcion"] ?>">
    </div>
    <div class="form-group">
        <label for="">Modelo</label>
        <input disabled name="modelo" type="text" class="form-control" id="" value="<?= $articulo["modelo"] ?>">
    </div>
    <div class="form-group">
      <label for="">Categoria</label>
      <select disabled class="form-control" name="categoria" id="">
      <?php foreach($categorias as $categoria): ?>
        <?php if ($categoria == $articulo["categoria"]):?>
            <option selected="selected">
                <?= $categoria ?>
            </option>
        <?php else:?>
            <option><?= $categoria ?></option>
        <?php endif; ?>
        
      <?php endforeach; ?>

      </select>
    </div>
    <div class="form-group">
        <label for="">Unidades</label>
        <input disabled name="unidades" type="text" class="form-control" id="" value="<?= $articulo["unidades"] ?>">
    </div>
    <div class="form-group">
        <label for="">Precio</label>
        <input disabled name="precio" type="number" step="0.01" class="form-control" id="" value="<?= $articulo["precio"] ?>">
    </div>

    
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Volver</a>
    

</form>
