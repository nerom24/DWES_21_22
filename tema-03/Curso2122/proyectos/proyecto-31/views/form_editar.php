<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("partials/head.php") ?>

    <title>Editar Libro - Actividad 3</title>
  </head>
  <body>
    <div class="container">
      <!-- Cabecera -->
      <legend>
        Formulario Editar Libro
      </legend>
      <form action="update.php?indice=<?=$indice ?>" method="POST">
        <!-- Id - Oculto -->
        <div class="mb-3">
            <!-- <label for="titulo" class="form-label">Id</label> -->
            <input type="hidden" name="id" value="<?= $libro['Id']?>" >
        </div>
        <!-- Título -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $libro['Título']?>" >
            <div class="form-text">Título libro existente</div>
        </div>
        <!-- Autor -->
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" value="<?= $libro['Autor']?>" >
            <div class="form-text">Introduzca Autor del libro</div>
        </div>
        <!-- Género -->
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" name="genero" value="<?= $libro['Género']?>" >
            <div class="form-text">Género del libro</div>
        </div>
        <!-- Género -->
        <div class="mb-3">
            <label for="precio" class="form-label">Precio (€)</label>
            <input type="number" class="form-control" name="precio" step="0.01" value="<?= $libro['Precio']?>" >
            <div class="form-text">Introduzca Precio</div>
        </div>
        
        
        <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>    
      </form>
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
    </div>
    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>
  </body>
</html>