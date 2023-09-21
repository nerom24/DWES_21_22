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

        <legend> Tabla Películas</legend> 

        <!-- NAV -->
        <?php require_once("template/partials/menu.php"); ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Director</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Generos</th>
                    <th scope="col">Año</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                        
                    <tr>

                        <!-- Columnas de la tabla -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                        <!-- Añadir iconos de acción -->
                        <td>
                            <a href="#"><i class="material-icons">delete</i></a>
                            <a href="#"><i class="material-icons">edit</i></a>
                        </td>
                    </tr>
                
            </tbody>
        </table>


        <!-- FOOTER -->
        <?php require_once("template/partials/footer.php"); ?>
        
    </div>

    <!-- JAVASCRIPT -->
    <?php require_once("template/partials/javascript.php"); ?>

</body>
</html>