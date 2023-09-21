<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Actividad 3 - Tema 3</title>
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

      

      <footer>
        <hr>
        <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 21/22</p>
      </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>