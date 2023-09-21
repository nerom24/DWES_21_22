<legend>Formulario Crear Noticia</legend>
<form method="POST" action="nuevo.php">
    
    <!-- Titulo -->
    <div class="form-group">
        <label for="">Título</label>
        <input name="titulo" type="text" class="form-control" id="" >
    </div>
    
    <!-- Extracto -->
    <div class="form-group">
        <label for="">Extracto</label>
        <input name="extracto" type="text" class="form-control" id="" >
    </div>
    
    <!-- # Contenido -->
    <div class="form-group">
        <label for="">Contenido</label>
        <textarea class="form-control" name="contenido" id="" rows="3">Introduzca texto ...</textarea>
    </div>
    
    <!-- # Autor -->
    <div class="form-group">
        <label for="">Autor</label>
        <input type="text" name="autor"  class="form-control" id="" >
    </div>

    <!-- # Fecha -->
    <div class="form-group">
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="form-control" id="" >
    </div>
    <!-- # Imagen -->
    <div class="form-group">
        <label for="">Imagen</label>
        <input type="text" name="imagen"  class="form-control" id="" >
    </div>

    <!-- # Sección -->
    <div class="form-group">
      <label for="">Sección</label>
      <select class="form-control" name="seccion" id="">

      <?php foreach($secciones as $key => $seccion): ?>
        <option value="<?= $key ?>"><?= $seccion ?></option>
      <?php endforeach; ?>
      
      </select>
    </div>
    
    <!-- # Etiquetas -->
    <div class="form-group">
        <label for="">Etiquetas</label>
        <div  class="form-control">
            <?php foreach ($etiquetas as $key =>$etiqueta):?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="etiqueta[]" value="<?=$key?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?=$etiqueta ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- # Botón Cancelar -->
    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Cancelar</a>

    <!-- # Botón Reset -->
    <button class="btn btn-dark" type="reset">Reset</button>

    <!-- # Botón Añadir -->
    <button type="submit" formaction="nuevo.php" class="btn btn-primary">Añadir</button>

</form>