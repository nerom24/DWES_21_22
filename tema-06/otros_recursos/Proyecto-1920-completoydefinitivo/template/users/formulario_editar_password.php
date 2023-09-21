<div class="container">
    	<legend>Formulario Editar Password</legend>
        <form method="POST">
        <div class="form-group">
                <label for="password1">Password Actual</label>
                <input type="password" name= "pass_actual" value="<?= $pass_actual ?>" class="form-control" id="password1">
                <small id="password1" class="form-text text-muted">Introduzca entre 5-50 caracteres</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['pass_actual']))? $errores['pass_actual']:null?></small>

            </div>
            <div class="form-group">
                <label for="password1">Nuevo Password</label>
                <input type="password" name= "pass_1" value="<?= $pass_1 ?>" class="form-control" id="password1">
                <small id="password1" class="form-text text-muted">Introduzca entre 5-50 caracteres</small>
                <!-- # Mensaje en caso de error -->
                <small id="nameHelp" class="form-text text-danger"><?= (isset($errores['pass_1']))? $errores['pass_1']:null?></small>

            </div>
            <div class="form-group">
                <label for="password2">Confirmar Nuevo Password</label>
                <input type="password" name= "pass_2" class="form-control" id="">
            </div>
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="submit" formaction="validar_edit_password.php" class="btn btn-primary">Actualizar</button>

        </form>
		
	</div>