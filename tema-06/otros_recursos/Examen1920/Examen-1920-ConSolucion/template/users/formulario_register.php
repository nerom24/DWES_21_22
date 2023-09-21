
<div class="container">
    	<legend>Formulario de Registro</legend>
        <form method="POST" action="nuevo_user.php">
        <div class="form-group">
                <label for="name">Nombre Usuario</label>
                <input type="text" name="name" value="<?= $user->getName() ?>" class="form-control" id="name" aria-describedby="nameHelp" >
                <!-- # Mensaje ayuda -->
                <small id="nameHelp" class="form-text text-muted">Nombre de usuario entre 5-50 caracteres</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['name']))? $errores['name']:null?></small>
                
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name= "email" value="<?= $user->getEmail() ?>" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Introduzca Email válido</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['email']))? $errores['email']:null?></small>
            </div>
            <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" name= "password1" value="<?= $user->getPassword() ?>" class="form-control" id="password1">
                <small id="password1" class="form-text text-muted">Introduzca entre 5-50 caracteres</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['password']))? $errores['password']:null?></small>

            </div>
            <div class="form-group">
                <label for="password2">Confirmar Password</label>
                <input type="password" name= "password2" class="form-control" id="">
            </div>
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            
            <button class="btn btn-dark" type="reset">Reset</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
            

        </form>
		
	</div>