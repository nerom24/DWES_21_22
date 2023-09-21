
<form method="POST" action="editar.php?indice=<?= $key; ?>">
    <legend>Formulario Actualizar Película</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" title="Título" value = "<?= $titulo; ?>">
    </div>

    <div class="form-group">
        <label for="">Director</label>
        <input type="text" name="director"  class="form-control" title="Director" value = "<?= $director; ?>">
    </div>

    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input type="text" name="nacionalidad"  class="form-control" title="Nacionalidad" value = "<?= $nacionalidad; ?>">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <div  class="form-control">
            <?php foreach ($generos as $key =>$genero):?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="generos[]" value="<?=$key?>" 
                    <?= (in_array($genero, $generosRegistro)) ? "checked":null ?>>
                    <label class="form-check-label" for="inlineCheckbox1"><?=$genero ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label for="">Año</label>
        <input type="number" name="ano"  class="form-control" title="Año" value = "<?= $ano; ?>">
    </div>

   

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" >Actualizar</button>
    
</form>

