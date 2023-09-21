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

        <legend> Mis Series</legend> 

        <!-- NAV -->
        <?php require_once("template/partials/menu.php"); ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Director</th> 
                    <th scope="col">Estreno</th>
                    <th scope="col">Plataforma</th>
                    <th scope="col">Temporadas</th>
                    <th scope="col">Generos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>


        <!-- FOOTER -->
        <?php require_once("template/partials/footer.php"); ?>
        
    </div>

    <!-- JAVASCRIPT -->
    <?php require_once("template/partials/javascript.php"); ?>

</body>
</html>