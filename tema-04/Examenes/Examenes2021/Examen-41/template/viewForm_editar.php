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
        <legend>Editar Alumno</legend>
        
        <!-- Tabla Usuarios -->
        <form method= "POST" action="actualizar.php?indice=<?=$indice?>">
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
                <label for="exampleInputPoblacion">Población</label>
                <input name = "poblacion" type="text" class="form-control" value="<?=$poblacion?>">
            </div>

            <div class="form-group">
                <label for="exampleInputFecha">Fecha Nacimiento</label>
                <input name = "fechaNacimiento" type="date" class="form-control" value="<?=$fechaNacimiento?>">
            </div>

            <!-- Generación dinámica Select CURSOS -->
            <div class="form-group">
                <label for="">Curso</label>
                <select class="custom-select" name="curso">
                    <?php foreach ($arrayCursos as $cur):?>
                        <option value="<?=$cur?>" <?= ($cur == $curso)?'selected':null?>>
                            <?=$curso?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Lista dinámica checkbox -->
            <div class="form-group">    
                <label for="exampleInputCategoria">Asignaturas</label> 
                <div class="form-control">          
                    <?php foreach($arrayAsignaturas as $asignatura):?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="asignaturas[]" value="<?=$asignatura?>"
                            <?= (in_array($asignatura,$asignaturas))?'checked':null?>>
                            <label class="form-check-label" for="inlineCheckbox1"><?=$asignatura?> </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> 
            <a class="btn btn-secondary" href="index.php">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>