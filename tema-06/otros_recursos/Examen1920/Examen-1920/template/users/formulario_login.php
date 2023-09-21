<!-- Falta el código php inyectado al formulario -->
<div class="container">
        <legend>Formulario Login</legend>
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value = "" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-danger"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" value = "" class="form-control" id="exampleInputPassword1">
                <small id="emailHelp" class="form-text text-danger"></small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="recordar" class="form-check-input" id="exampleCheck1" value=1>
                <label class="form-check-label" for="exampleCheck1">Recordar</label>
            </div>
            <button type="submit" formaction="register.php"class="btn btn-secondary">Registrar</button>
            <button type="submit" formaction="validar_acceso.php" class="btn btn-primary">Submit</button>

        </form>
		
</div>