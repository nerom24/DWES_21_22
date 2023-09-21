<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>

<body>
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>

    <div class ="container">
        <?php include_once ("template/partials/notify.php") ?>

        <!-- Formulario -->
        <legend>Mostrar Corredor</legend>
        
        <form>

        <fieldset disabled>
            <!-- ID -->
            <div class="form-group" >
                <label for="">Id</label>
                <input name="id" type="text" class="form-control" value="<?=$corredor->id?>">
            </div>

            <!-- Nombre -->
            <div class="form-group">
                <label for="">Nombre</label>
                <input name="nombre" type="text" class="form-control" value="<?=$corredor->nombre?>">
            </div>

            <!-- Apellidos -->
            <div class="form-group">
                <label for="">Apellidos</label>
                <input name="apellidos" type="text" class="form-control" value="<?=$corredor->apellidos?>">
            </div>

            <!-- Población -->
            <div class="form-group">
                <label for="">Ciudad</label>
                <input name="ciudad" type="text" class="form-control" value="<?=$corredor->ciudad?>">
            </div>

             <!-- Sexo -->
             <div class="form-group">
                <label for="">Sexo</label>
                <div class="form-control"> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="H" 
                        <?= ($corredor->sexo == 'H')? 'checked':NULL ?> >
                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="M"
                        <?= ($corredor->sexo == 'M')? 'checked':NULL ?>>
                        <label class="form-check-label" for="inlineRadio2">Mujer</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="S" 
                        <?= ($corredor->sexo == 'S')? 'checked':NULL ?> >
                        <label class="form-check-label" for="inlineRadio3">Sin Especificar </label>
                    </div>
                </div>
            </div>

             <!-- Fecha Nacimiento -->
             <div class="form-group">
                <label for="">Fecha de Nacimiento</label>
                <input name="fechaNacimiento" type="date" class="form-control" value="<?=$corredor->fechaNacimiento?>">
            </div>

            <!-- Edad -->
            <div class="form-group">
                <label for="">Edad</label>
                <input name="edad" type="number" class="form-control" value="<?=$corredor->edad?>">
            </div>


            <!-- Email -->
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="email" class="form-control" value="<?=$corredor->email?>">
            </div>

            <!-- DNI -->
            <div class="form-group">
                <label for="">DNI</label>
                <input name="dni" type="text" class="form-control" value="<?=$corredor->dni?>" pattern="[0-9]{8}[A-Za-z]{1}" >
            </div>


            <!-- Categoría -->
            <div class="form-group">
                <label for="">Categoria</label>
                <select class="form-control" name="id_categoria">
                    <!-- Es una clave ajena, como value se pone el id del curso -->
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?=$categoria->id ?>"
                        <?=($categoria->id == $corredor->id_categoria)? "selected":null ?> >
                        <?=$categoria->categoria?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Club -->
            <div class="form-group">
                <label for="">Club</label>
                <select class="custom-select" name="id_club">
                    <?php foreach ($clubs as $key =>$club):?>
                        <option value = "<?=$club->id ?>"  
                        <?= ($club->id == $corredor->id_club)? "selected" : null ?> >
                        <?=$club->club ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            </fieldset>

            <br>
            <!-- Botones -->
            <a href="index.php" class="btn btn-secondary" role="button">Volver</a>
            
        </form>
        <!-- Fin de formulario -->


        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>