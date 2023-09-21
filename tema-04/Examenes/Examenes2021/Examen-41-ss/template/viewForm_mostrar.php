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
        <legend>Mostrar Usuario</legend>
        
        <!-- Tabla Usuarios -->
        <form>
            
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input  type="text" class="form-control" >
            </div>
            <div class="form-group"> 
                <label for="exampleInputNombre">Nombre</label>
                <input  type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input  type="text" class="form-control" >
            </div>

            <div class="form-group">
                <label for="exampleInputNacionalidad">Nacionalidad</label>
                <input type="text" class="form-control" >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input  type="password" class="form-control" >
            </div>

            <div class="form-group">    
                <label for="exampleInputCategoria">Perfiles</label> 
                <div class="form-control">          
                   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" >
                            <label class="form-check-label" for="inlineCheckbox1"></label>
                        </div>
                    
                </div>
            </div> 
            </fieldset>
            <a class="btn btn-primary" href="index.php">Salir</a>
            
        </form>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>