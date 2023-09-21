<form method="POST" action="">
    <legend>Detalles de Usuario</legend>
    <div class="form-group">
        <label for="">Nombre</label>
        <input disabled name="nombre" type="text" class="form-control" id="" placeholder="Nombre" value="<?= $usuario->getNombre() ?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input disabled name="email" type="email" class="form-control" id="" placeholder="ejemplo@email.com" value="<?= $usuario->getEmail() ?>">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input disabled name="password" type="password" class="form-control" id="" placeholder="*****" value="<?= $usuario->getPassword() ?>">
    </div>
    <div class="form-group">
        <label for="">Perfil</label>
        <select disabled class="form-control" name="perfil" id="">

            <?php foreach ($perfiles as $key => $perfil) : ?>
                <option value="<?= $key ?>" <?= ($perfil == $usuario->getPerfil()) ? 'selected="selected"' : '' ?>><?= $perfil ?></option>
            <?php endforeach; ?>

        </select>
    </div>
    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input disabled name="nacionalidad" type="text" class="form-control" id="" placeholder="Nacionalidad" value="<?= $usuario->getNacionalidad() ?>">
    </div>

    <div class="form-group">
        <input name="id" type="number" class="form-control" id="" hidden value="<?= $usuario->getId() ?>">
    </div>
    <a name="" id="" class="btn btn-info" href="index.php" role="button">Volver</a>

</form>