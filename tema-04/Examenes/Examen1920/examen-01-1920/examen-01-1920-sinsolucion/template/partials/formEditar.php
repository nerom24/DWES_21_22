<legend>Formulario Editar Noticia</legend>
<form method="POST" action="#"> 
    
    <!-- id oculto -->
    
    <!-- <label for="">Id</label> -->
    <input type="number" name="id"  class="invisible" id="" value ="" >
    
    
    <!-- Titulo -->
    <div class="form-group">
        <label for="">Título</label>
        <input name="titulo" type="text" class="form-control" id="" value ="" >
    </div>
    
    <!-- Extracto -->
    <div class="form-group">
        <label for="">Extracto</label>
        <input name="extracto" type="text" class="form-control" id="" value ="">
    </div>
    
    <!-- # Contenido -->
    <div class="form-group">
        <label for="">Contenido</label>
        <textarea class="form-control" name="contenido" id="" rows="3"></textarea>
    </div>
    
    <!-- # Autor -->
    <div class="form-group">
        <label for="">Autor</label>
        <input type="text" name="autor"  class="form-control" id="" value="" >
    </div>

    <!-- # Fecha -->
    <div class="form-group">
        <label for="">Fecha</label>
        <input type="text" name="fecha" class="form-control" id="" value="" >
    </div>
    <!-- # Imagen -->
    <div class="form-group">
        <label for="">Imagen</label>
        <input type="text" name="imagen"  class="form-control" id="" value="">
    </div>

    <!-- # Sección -->
    <div class="form-group">
      <label for="">Sección</label>
      <select class="form-control" name="seccion" id="">

      <!-- Lista desplegable -->
      
      </select>
    </div>
    
    <!-- # Etiquetas -->
    <div class="form-group">
        <label for="">Etiquetas</label>
        <div  class="form-control">
            <!-- lista checkbox -->
        </div>
    </div>
    
    <!-- # Botón Cancelar -->
    <a class="btn btn-secondary" href="admin.php" role="button">Cancelar</a>

    <!-- # Botón Reset -->
    <button class="btn btn-dark" type="reset">Reset</button>

    <!-- # Botón Añadir -->
    <button type="submit" class="btn btn-primary">Actualizar</button>

</form>

