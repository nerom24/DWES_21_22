<!doctype html>
<html lang="es">
    <!-- head de HTML -->
    <?php require_once("template/partials/head.php"); ?>
  
    <body>
    <div class="container">
        
        <!-- Cabecera de la página -->
        <?php require_once('template/partials/cabecera.php'); ?>
       
        <!-- Menú de navegación -->
        <?php require_once('template/partials/menu.php'); ?>
    

        <section>
            <article>
            <br>
            <!-- Especificar Contenido -->
            <legend>Tabla Usuarios</legend>
            <table class="table">
                
                
                <thead  class="">
                    
                    
                </thead>
                <tbody>
                    

                    <!-- Añadir Acciones disponibles -->
                    <td>
                        <a href="#" title="Eliminar"><i class="material-icons">delete</i></a>
                        <a href="#" title="Actualizar"><i class="material-icons">edit</i></a>
                    </td>
                    </tr>
                
                    
                </tbody>
            </table>
            </article>
        </section>
        <!-- Pie de página -->
        <?php require_once('template/partials/footer.php'); ?>
    </div>
    <!-- Enlaces javascript -->
    <?php require_once('template/partials/javascript.php'); ?>
  </body>
</html>