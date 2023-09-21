<form method="POST" action="editar.php?indice=<?= $clave ?>">
    <legend>Editar Usuario</legend>
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre" value="<?= $usuario->getNombre() ?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" id="" placeholder="ejemplo@email.com" value="<?= $usuario->getEmail() ?>">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input name="password" type="password" class="form-control" id="" placeholder="*****" value="<?= $usuario->getPassword() ?>">
    </div>
    <div class="form-group">
        <label for="">Perfil</label>
        <select class="form-control" name="perfil" id="">

            <?php foreach ($perfiles as $key => $perfil) : ?>
                <option value="<?= $key ?>" <?= ($perfil == $usuario->getPerfil()) ? 'selected="selected"' : '' ?>><?= $perfil ?></option>
            <?php endforeach; ?>

        </select>
    </div>
    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input name="nacionalidad" type="text" class="form-control" id="" placeholder="Nacionalidad" value="<?= $usuario->getNacionalidad() ?>">
    </div>

    <div class="form-group">
        <input name="id" type="number" class="form-control" id="" hidden value="<?= $usuario->getId() ?>">
    </div>
    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button class="btn btn-dark" type="reset">Reset</button>

    <button type="submit" class="btn btn-primary">Actualizar</button>

</form>

