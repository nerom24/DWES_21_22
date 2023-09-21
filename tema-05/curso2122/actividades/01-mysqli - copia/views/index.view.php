<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "partials/head.php"?>
    <title>Home - Gestión Clientes</title>
  </head>
  <body>
      <!-- Incluimos la libreria java -->
      <?php include "partials/javascript.php"?>

      <!-- Incluimos la cabecera -->
      <?php include "partials/cabecera.php"?>

      <div class="container">
        <!-- Incluimos partial ménu -->
        <?php include "partials/menu.php"?>

        <table class="table table-striped">
          <thead>
            <tr>
              <!-- Añadimos PHP con cabecera de la tabla -->
              <th>Id</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Población</th>
              <th>edad</th>
              <th>Curso</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
              <!-- Añadimos PHP para mostrar los detalles de los clientes -->
              <?php foreach ($arrayAlumnos as $clave => $alumno): ?>
                <tr>
                  <td><?= $alumno['id'] ?></td>
                  <td><?= $alumno['nombre'] ?></td>
                  <td><?= $alumno['apellidos'] ?></td>
                  <td><?= $alumno['email'] ?></td>
                  <td><?= $alumno['poblacion'] ?></td>
                  <td><?= $alumno['edad'] ?></td>
                  <td><?= $alumno['curso'] ?></td>
                  
                  <!-- Muestro los botones de acción -->
                  <td>
                    <a href="eliminar.php?indice=<?=$clave?>" title="Eliminar"><i class="bi bi-trash-fill"></i></a>
                    <a href="editar.php?indice=<?=$clave?>" title="Editar"><i class="bi bi-pencil-square"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>  
          </tbody>
        </table>
        <!-- Incluimos el pie -->
        <?php include "partials/foot.php"?>
      </div>  
  </body>
</html>