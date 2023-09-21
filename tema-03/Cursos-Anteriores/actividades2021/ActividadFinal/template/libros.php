<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>
<!-- Fin head -->

<body>
    <div class ="container">
        <!-- cabecera -->
        <?php include_once("template/partials/cabecera.php");?>
        <legend> Tabla Libros</legend>
        <!-- Menú libros -->
        <?php include_once("template/partials/menu.php");?>

        <table class="table">
             
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Género</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($libros as $key => $libro): ?> 
                    <tr>
                        <td><?=$libro['id']?></td> 
                        <td><?=$libro['titulo']?></td>
                        <td><?=$libro['autor']?></td>
                        <td><?=$libro['genero']?></td>
                        <td><?=$libro['precio']?></td>

                        <!-- Añado iconos de acción -->
                        <td>
                        <a href="eliminar.php?indice=<?=$key?>"><i class="material-icons">delete</i></a>
                        <a href="editar.php?indice=<?=$key?>"><i class="material-icons">edit</i></a>
                        </td>

                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>