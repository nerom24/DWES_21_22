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
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Población</th>
                    <th>Fecha Nac</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayAlumnos as $alumno): ?>
                    <tr>

                        <td><?= $alumno['id'] ?></td>
                        <td><?= $alumno['nombre'] ?></td>
                        <td><?= $alumno['apellidos'] ?></td>
                        <td><?= $alumno['email']?></td>
                        <td><?= $alumno['poblacion'] ?></td>
                        <td><?= $alumno['fechaNac'] ?></td>
                        <td><?= getEdad($alumno['fechaNac']) ?></td>
                        <td>
                            <a href="eliminar.php?indice=<?= $alumno['id'] ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="editar.php?indice=<?= $alumno['id'] ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="mostrar.php?indice=<?= $alumno['id'] ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr><td colspan="8">Nº Registros: <?= count($arrayAlumnos)?></td></tr>
            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>