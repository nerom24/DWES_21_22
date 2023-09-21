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
            <fieldset disabled>
            <div class="form-group" hidden> 
                <label for="exampleInputId">Id</label>
                <input name = "id" type="text" class="form-control" value="<?=$id?>">
            </div>
            <div class="form-group"> 
                <label for="exampleInputNombre">Nombre</label>
                <input name = "nombre" type="text" class="form-control" value="<?=$nombre?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input name = "email" type="text" class="form-control" value="<?=$email?>">
            </div>

            <div class="form-group">
                <label for="exampleInputNacionalidad">Nacionalidad</label>
                <input name = "nacionalidad" type="text" class="form-control" value="<?=$nacionalidad?>">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input name = "password" type="password" class="form-control" value="<?=$password?>">
            </div>

            <div class="form-group">    
                <label for="exampleInputCategoria">Perfiles</label> 
                <div class="form-control">          
                    <?php foreach($arrayPerfiles as $perfil):?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="perfiles[]" value="<?=$perfil?>"
                            <?= (in_array($perfil,$perfiles))?'checked':null?>>
                            <label class="form-check-label" for="inlineCheckbox1"><?=$perfil?> </label>
                        </div>
                    <?php endforeach; ?>
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