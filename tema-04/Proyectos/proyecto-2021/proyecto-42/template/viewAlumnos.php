<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>
<!-- Fin head -->

<body>
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>
    
    <div class ="container">

        <!-- Mensaje de notificación -->
        <?php include_once("template/partials/notify.php"); ?>

        <legend> Panel Control alumnos</legend>
        <?php include_once("template/partials/menu.php");?>
        <!-- Tabla alumnos -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Población</th>
                    <th>Edad</th>
                    <th>Curso</th>
                    <th>Asignaturas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos->getTabla() as $indice => $alumno) : ?>
                    <tr>

                        <td><?= $alumno->getId() ?></td>
                        <td><?= $alumno->getNombre() ?></td>
                        <td><?= $alumno->getEmail() ?></td>
                        <td><?= $alumno->getPoblacion() ?></td>
                        <td><?= $alumno->getEdad() ?></td>
                        <td><?= $alumno->getCurso() ?></td>
                        <td><?= implode (", ", $alumno->getAsignaturas()) ?></td>
                        
                        <td>
                            <a href="eliminar.php?indice=<?= $indice ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="editar.php?indice=<?= $indice ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="mostrar.php?indice=<?= $indice ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>