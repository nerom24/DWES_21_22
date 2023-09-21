<!-- TEMPLATE BOOTSTRAP 4.5 -->

<!-- Plantilla Básica BootStrapt en local -->
<!DOCTYPE html>
<html lang="es">

<!-- HEAD -->
<?php require_once("template/partials/head.php"); ?>

<body>
    <div class ="container">

        <!-- HEADER -->
        <?php require_once("template/partials/cabecera.php"); ?>

        <legend> Tabla Artículos</legend> 

        <!-- NAV -->
        <?php require_once("template/partials/menu.php"); ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articulos as $key => $resitro): ?> <!--  Debe aparece la key para usarla abajo.
                    VAMOS HACIENDO UNA TABLA CON EL ARRAY creando una variable para guardar cada elemento-->
                    <tr><!--scope es para señalas que son encabezados de filas o columnas-->
                        <td><?=$resitro['id']?></td>
                        <td><?=$resitro['descripcion']?></td>
                        <td><?=$resitro['modelo']?></td>
                        <td><?=$resitro['categoria']?></td>
                        <td><?=$resitro['unidades']?></td>
                        <td><?=$resitro['precio']?></td>
                        <!-- Añadir iconos de acción -->
                        <td>
                            <!-- Al hacer clic llamamos a eliminar y le enviamos la variable índice con el método GET -->
                            <!-- URL dinámico (al pulsar el lápiz le manda el índice del elemento en el que está el lápiz [0, 1, 2...]) -->
                            <a href="eliminar.php?indice=<?=$key?>"><i class="material-icons">delete</i></a>
                            <a href="editar.php?indice=<?=$key?>"><i class="material-icons">edit</i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>


        <!-- FOOTER -->
        <?php require_once("template/partials/footer.php"); ?>
        
    </div>

    <!-- JAVASCRIPT -->
    <?php require_once("template/partials/javascript.php"); ?>

</body>
</html>