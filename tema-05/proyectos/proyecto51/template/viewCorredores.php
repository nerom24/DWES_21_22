<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>

<body>
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>

    <div class ="container">
        <?php include_once ("template/partials/notify.php") ?>
        <legend>Panel Control Corredores</legend>
        <?php include_once("template/partials/menu.php");?>
        <!-- Tabla Usuarios -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Ciudad</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Categoría</th>
                    <th>Club</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($corredores as $corredor): ?>
                    <tr>

                        <td><?= $corredor->id ?></td>
                        <td><?= $corredor->nombre ?></td>
                        <td><?= $corredor->apellidos ?></td>
                        <td><?= $corredor->ciudad ?></td>
                        <td><?= $corredor->email ?></td>
                        <td><?= $corredor->edad ?></td>
                        <td><?= $corredor->categoria ?></td>
                        <td><?= $corredor->club ?></td>

                        <td>
                            <a href="delete.php?id=<?= $corredor->id ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="editar.php?id=<?= $corredor->id ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="mostrar.php?id=<?= $corredor->id ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="8" >Nº Registros: <?= $corredores->rowCount(); ?> </td>
                </tr>

            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>