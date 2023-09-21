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

        <!-- Mensaje de notificación -->
        <?php include_once("template/partials/notify.php"); ?>

        <!--    Formulario -->
        <legend>Formulario Crear Alumno</legend>
        <form method="POST" action="create.php">  
            <!-- # Nombre -->
            <div class="form-group">
                <label for="">Nombre</label>
                <input name="nombre" type="text" class="form-control" >
            </div>
            <!-- # Apellidos -->
            <div class="form-group">
                <label for="">Apellidos</label>
                <input name="apellidos" type="text" class="form-control">
            </div>
            <!-- # Población -->
            <div class="form-group">
                <label for="">Población</label>
                <input name="poblacion" type="text" class="form-control"  >
            </div>
            <!-- # Email -->
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control" placeholder="ejemplo@email.com">
            </div>
            <!-- # Teléfono -->
            <div class="form-group">
                <label for="">Teléfono</label>
                <input name="telefono" type="tel" class="form-control" id="" pattern="[0-9]{9}" >
            </div>
            <!-- # Fecha Nacimiento -->
            <div class="form-group">
                <label for="">Fecha Nacimiento</label>
                <input name="fechaNac" type="date" class="form-control"  >
            </div>
            <!-- # DNI -->
            <div class="form-group">
                <label for="">DNI</label>
                <input name="dni" type="text" class="form-control" pattern="[0-9]{8}[A-Za-z]{1}" >
            </div>
            <!-- # Curso -->
            <!-- select dinámico a partir de la tabla Cursos -->
            <div class="form-group">
                <label for="">Curso</label>
                <select class="form-control" name="id_curso" >
                    <!-- Id_curso es clave ajena y devuelve como value el id -->
                    <?php foreach($cursos as $curso): ?>
                        <option value="<?= $curso->id ?>"><?= $curso->curso ?></option>
                    <?php endforeach; ?>
                 </select>
            </div>
    
            <a href="index.php" class="btn btn-secondary"  role="button">Cancelar</a>  
            <button type="reset" class="btn btn-dark" >Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>


        <!-- Fin Formulario -->        
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>