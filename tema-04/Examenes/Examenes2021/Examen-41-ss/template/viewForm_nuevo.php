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
        <legend> Nuevo Alumno</legend>
        
        <!-- Tabla Usuarios -->
        <form method= "POST" action="nuevo.php">
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="exampleInputNombre">Nombre</label>
                <input  type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputNacionalidad">Población</label>
                <input  type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">F. Nacimiento</label>
                <input  type="date" class="form-control">
            </div>

            <!-- Generación dinámica Select Paises -->
            <div class="form-group">
                <label for="">Nacionalidad</label>
                <select class="custom-select" >
                    
                        <option ></option>
                   
                </select>
            </div>

            <!-- Generación dinámica checkbox Sectores -->
            <div class="form-group">    
                <label for="exampleInputCategoria">Sectores</label> 
                <div class="form-control">          
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  >
                            <label class="form-check-label" for="inlineCheckbox1"></label>
                        </div>
                    
                </div>
            </div> 
            <a class="btn btn-secondary" href="index.php">Cancelar</a>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>