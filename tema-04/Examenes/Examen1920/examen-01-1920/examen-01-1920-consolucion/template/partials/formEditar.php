<legend>Formulario Editar Noticia</legend>
<form method="POST" action="editar.php?indice=<?= $_GET['indice']?>"> 
    
    <!-- id oculto -->
    
    <!-- <label for="">Id</label> -->
    <input type="number" name="id"  class="invisible" id="" value ="<?= $noticia->getId()?>" >
    
    
    <!-- Titulo -->
    <div class="form-group">
        <label for="">Título</label>
        <input name="titulo" type="text" class="form-control" id="" value ="<?= $noticia->getTitulo()?>" >
    </div>
    
    <!-- Extracto -->
    <div class="form-group">
        <label for="">Extracto</label>
        <input name="extracto" type="text" class="form-control" id="" value ="<?= $noticia->getExtracto()?>">
    </div>
    
    <!-- # Contenido -->
    <div class="form-group">
        <label for="">Contenido</label>
        <textarea class="form-control" name="contenido" id="" rows="3"><?= $noticia->getContenido()?></textarea>
    </div>
    
    <!-- # Autor -->
    <div class="form-group">
        <label for="">Autor</label>
        <input type="text" name="autor"  class="form-control" id="" value="<?= $noticia->getAutor()?>"" >
    </div>

    <!-- # Fecha -->
    <div class="form-group">
        <label for="">Fecha</label>
        <input type="text" name="fecha" class="form-control" id="" value="<?= $noticia->getFecha()?>" >
    </div>
    <!-- # Imagen -->
    <div class="form-group">
        <label for="">Imagen</label>
        <input type="text" name="imagen"  class="form-control" id="" value="<?= $noticia->getImagen()?>">
    </div>

    <!-- # Sección -->
    <div class="form-group">
      <label for="">Sección</label>
      <select class="form-control" name="seccion" id="">

      <?php foreach($secciones as $key => $seccion): ?>
        <option value="<?= $key ?>" <?= ($noticia->getSeccion() == $seccion) ? "selected" : null ?>><?= $seccion ?></option>
      <?php endforeach; ?>
      
      </select>
    </div>
    
    <!-- # Etiquetas -->
    <div class="form-group">
        <label for="">Etiquetas</label>
        <div  class="form-control">
            <?php foreach ($etiquetas as $key =>$etiqueta):?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="etiqueta[]" value="<?=$key?>"
                    <?= (in_array($etiqueta, $noticia->getEtiquetas())) ? "checked": null ?>>
                    <label class="form-check-label" for="inlineCheckbox1"><?=$etiqueta ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- # Botón Cancelar -->
    <a class="btn btn-secondary" href="admin.php" role="button">Cancelar</a>

    <!-- # Botón Reset -->
    <button class="btn btn-dark" type="reset">Reset</button>

    <!-- # Botón Añadir -->
    <button type="submit" class="btn btn-primary">Actualizar</button>

</form>

