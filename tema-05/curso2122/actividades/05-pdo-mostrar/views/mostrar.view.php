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
        <legend>Formulario Mostrar Alumno</legend>
        <form action="update.php?id=<?= $id ?>" method="POST">
            <!-- id Oculto -->
            <div class="mb-3" hidden>
                <label class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value = "<?= $alumno->id ?>" readonly>
            </div>
            <!-- nombre -->
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value = "<?= $alumno->nombre?>" readonly>
            </div>
            <!-- nombre -->
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value = "<?= $alumno->apellidos?>" readonly>
            </div>
            <!-- poblacion -->
            <div class="mb-3">
                <label class="form-label">Población</label>
                <input type="text" class="form-control" name="poblacion" value = "<?= $alumno->poblacion?>" readonly>
            </div>
            <!-- poblacion -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value = "<?= $alumno->email?>" readonly>
            </div>
            <!-- fecha nacimiento -->
            <div class="mb-3">
                <label class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fechaNac" value = "<?= $alumno->fechaNac?>" readonly>
            </div>
            <!-- DNI -->
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" value = "<?= $alumno->dni?>" readonly>
            </div>
           
            <!-- Curso -->
            <div class="mb-3">
                <label class="form-label">Curso</label>
                <input type="text" class="form-control" name="curso" value = "<?= $alumnos->getCurso($alumno->id_curso) ?>" readonly>
            </div>

            <!-- Botones -->
            <div class="mb3" role="group">
                <a class="btn btn-primary" href="index.php" role="button">Volver</a>
            </div>
        </form>
        <!-- Incluimos el pie -->
        <?php include "partials/foot.php"?>
      </div>  
  </body>
</html>