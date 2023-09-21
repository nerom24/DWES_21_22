
<form method="POST" action="nuevo.php">
    <legend>Formulario Añadir Película</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" required="required" title="Título">
    </div>

    <div class="form-group">
        <label for="">Director</label>
        <input type="text" name="director"  class="form-control" required="required" title="Director">
    </div>

    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input type="text" name="nacionalidad"  class="form-control" required="required" title="Nacionalidad">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <div  class="form-control">
            <?php foreach ($generos as $key =>$genero):?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="generos[]" value="<?=$key?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?=$genero ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label for="">Año</label>
        <input type="number" name="ano"  class="form-control" required="required" title="Año">
    </div>

   

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary" >Añadir</button>
    
</form>

