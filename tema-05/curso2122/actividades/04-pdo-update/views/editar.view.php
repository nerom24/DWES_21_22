<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "partials/head.php"?>
    <title>Editar - Gestión Alumnos</title>
  </head>
  <body>
      <!-- Incluimos la libreria java -->
      <?php include "partials/javascript.php"?>

      <!-- Incluimos la cabecera -->
      <!-- <?php include "partials/cabecera.php"?> -->

      <div class="container">
        <legend>Formulario Editar Alumno</legend>
        <form action="update.php?id=<?= $id ?>" method="POST">
            <!-- id Oculto -->
            <div class="mb-3" hidden>
                <label class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value = "<?= $alumno->id ?>">
            </div>
            <!-- nombre -->
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value = "<?= $alumno->nombre?>">
            </div>
            <!-- nombre -->
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value = "<?= $alumno->apellidos?>">
            </div>
            <!-- poblacion -->
            <div class="mb-3">
                <label class="form-label">Población</label>
                <input type="text" class="form-control" name="poblacion" value = "<?= $alumno->poblacion?>">
            </div>
            <!-- poblacion -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value = "<?= $alumno->email?>">
            </div>
            <!-- fecha nacimiento -->
            <div class="mb-3">
                <label class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fechaNac" value = "<?= $alumno->fechaNac?>">
            </div>
            <!-- DNI -->
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" value = "<?= $alumno->dni?>">
            </div>
           
            <!-- Curso -->
            <div class="mb-3">
                <label class="form-label">Curso</label>
                    <select class="form-select" name="curso">
                        <?php foreach($alumnos->getCursos() as $objeto):?>
                            <option value=<?= $objeto->id ?>
                            <?= ($alumno->id_curso == $objeto->id)? 'selected': null ?>
                            ><?= $objeto->curso ?></option>
                        <?php endforeach;?>
                    </select>
            </div>

            <!-- Botones -->
            <div class="mb3" role="group">
                <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
                <button type="reset" class="btn btn-danger">Restaurar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        <!-- Incluimos el pie -->
        <?php include "partials/foot.php"?>
      </div>  
  </body>
</html>