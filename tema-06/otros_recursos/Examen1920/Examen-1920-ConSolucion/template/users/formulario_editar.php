<div class="container">
    	<legend>Formulario Edición de Perfil</legend>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nombre Usuario</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control" id="name" aria-describedby="nameHelp" >
                <!-- # Mensaje ayuda -->
                <small id="nameHelp" class="form-text text-muted">Nombre de usuario entre 5-50 caracteres</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['name']))? $errores['name']:null?></small>
                
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name= "email" value="<?= $email ?>" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Introduzca Email válido</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['email']))? $errores['email']:null?></small>
            </div>
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <!-- <button type="reset" class="btn btn-secondary">Restaurar</button> -->
            <button type="submit" formaction="validar_edit_user.php" class="btn btn-primary">Actualizar</button>

        </form>
		
	</div>