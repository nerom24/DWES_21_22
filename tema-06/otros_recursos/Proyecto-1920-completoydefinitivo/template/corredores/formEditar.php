<form method="POST" action="editar.php">
    <legend>Formulario Editar Alumno</legend>
    <!-- # id oculto -->    
    <input name="id" type="number" class="invisible" id="" value = "<?= $corredor->getId()?>" >
    <input name="edad" type="number" class="invisible" id="" value = "<?= $corredor->getEdad()?>" >
    
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre"
        value="<?= $corredor->getNombre()?>">
    </div>
    <div class="form-group">
        <label for="">Apellidos</label>
        <input name="apellidos" type="text" class="form-control" id="" placeholder="apellidos"
        value="<?= $corredor->getApellidos()?>">
    </div>
    <div class="form-group">
        <label for="">Ciudad</label>
        <input name="ciudad" type="text" class="form-control" id="" placeholder=""
        value="<?= $corredor->getCiudad()?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" id="" placeholder="ejemplo@email.com"
        value="<?= $corredor->getEmail()?>">
    </div>

    <div class="form-group">
        <label for="">Fecha de Nacimiento</label>
        <input name="fechaNacimiento" type="date" class="form-control" id="" placeholder=""
        value="<?= $corredor->getFechaNacimiento()?>">
    </div>

    <div class="form-group">
      <label for="">Genero</label>
      <select class="form-control" name="sexo" id="">  
        <option <?= ($corredor->getSexo() == "H") ? "selected='selected'": "" ?> value="H">Hombre</option>
        <option <?= ($corredor->getSexo() == "M") ? "selected='selected'": "" ?>value="M">Mujer</option>
        <option <?= ($corredor->getSexo() == "") ? "selected='selected'": "" ?>value="">Sin Especificar</option>
      </select>
    </div>

    <div class="form-group">
        <label for="">Dni</label>
        <input name="dni" type="text" class="form-control" id="" placeholder="DNI"
        value="<?= $corredor->getDni()?>">
    </div>

    <div class="form-group">
      <label for="">Categoría</label>
      <select class="form-control" name="id_categoria" id="">

        <?php foreach ($categorias as $categoria): ?>       
            <option <?= ($corredor->getId_categoria() == $categoria->id) ? "selected='selected'": "" ?> value="<?= $categoria->id ?>"><?= $categoria->nombreCorto ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>
    <div class="form-group">
      <label for="">Club</label>
      <select class="form-control" name="id_club" id="">

        <?php foreach($clubs as $club): ?>       
            <option <?= ($corredor->getId_club() == $club->id) ? "selected='selected'": "" ?> value="<?= $club->id ?>"><?= $club->nombre ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>
    
    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button class="btn btn-dark" type="reset">Reset</button>
    
    <button type="submit" formaction="editar.php" class="btn btn-primary">Actualizar</button>
</form>