<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("partials/head.php") ?>
    <title>Añadir Libro - Actividad 3.3.4 - </title>
  </head>
  <body>
    <div class="container">    

      <legend>
        Formulario Nuevo Libro
      </legend>

      <form action="create.php" method="POST">
        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" >
            <div class="form-text">Introduzca título libro existente</div>
        </div>
        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" >
            <div class="form-text">Introduzca Autor del libro</div>
        </div>
        <!-- Género -->
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" name="genero" >
            <div class="form-text">Género del libro</div>
        </div>
        <!-- Género -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio (€)</label>
            <input type="number" class="form-control" name="precio" step="0.01" >
            <div class="form-text">Introduzca Precio</div>
        </div>
        
        
        <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
        
      </form>
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>
  </body>
</html>