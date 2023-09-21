<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("partials/head.php") ?>
    <title>Actividad 3.3.4 - Añadir</title>
  </head>
  
  <body>
    <!-- Incluimos Cabecera -->
    <?php include("partials/cabecera.php") ?>

    <div class="container">
      <!-- Cabecera -->
 
      <legend>
        Formulario Nuevo Artículo
      </legend>

      <form method= "POST" action="create.php">
            <!-- Campo ID Oculto-->
            <div class="mb-3" hidden> 
                <label for="exampleInputId">Id</label>
                <input name = "id" type="text" class="form-control">
            </div>

            <!-- Campo Descripción -->
            <div class="mb-3">
                <label for="exampleInputDescripcion">Descripción</label>
                <input name = "descripcion" type="text" class="form-control" required>
            </div>
            
            <!-- Campo Modelo -->
            <div class="mb-3">
                <label for="exampleInputModelo">Modelo</label>
                <input name = "modelo" type="text" class="form-control" required>
            </div>

            <!-- Campo Categoría -->
            <div class="mb-3">
                <label for="exampleInputCategoria">Categoría</label>
                <select class="form-select" name="categoria">
                    <?php foreach($categorias as $indice => $categoria):?>
                        <option value="<?=$indice?>"><?=$categoria?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo Unidades -->
            <div class="mb-3">
                <label for="exampleInputUnidades">Unidades</label>
                <input name = "unidades" type="text" class="form-control">
            </div>

            <!-- Campo Stock -->
            <div class="mb-3">
                <label for="exampleInputPrecio">Precio</label>
                <input name = "precio" type="number" class="form-control" placeholder= 0 step="0.1">
            </div>

            <!-- Botones de Acción -->
            <a class="btn btn-secondary" href="index.php">Cancelar</a>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>

      
      
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
      
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>

  </body>
</html>