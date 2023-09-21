<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <title></title>
</head>
<body>
    <form action="publicar.php" method="post" enctype="multipart/form-data">
    <!-- Especificar main-menu() -->
    <div class="container">
      <header class="text-center">
        <hgroup>
          <h1>Tema 7. Gestión de Archivos y Carpetas</h1>
          <h2>Examen Practico ordinario</h2>
        </hgroup>
      </header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Blog</a></li>
            <li class="active"><a href="administrar.php">Administrar</a></li>
          </ul>
        </div>
      </nav>
      <section>
        <article>
            <hgroup>
              <h4>Introducir Detalles de Noticia:</h4>
            </hgroup>
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" name="titulo">
            </div>
            <div class="form-group">
              <label for="fecha">Fecha Publicación</label>
              <input type="date" class="form-control" name="fecha">
            </div>
            <div class="form-group">
              <label for="autor">Autor</label>
              <input type="text" class="form-control" name="autor">
            </div>
            <div class="form-group">
              <label for="tema">Temática</label>
              <input type="text" class="form-control" name="tema">
            </div>
            <div class="form-group">
              <label for="iamgen">Imagen</label>
              <input type="file" class="form-control" name="imagen">
            </div>
            <div class="form-group">
              <label for="contenido">Contenido</label>
              <textarea class="form-control" rows="5" name="contenido"></textarea>
            </div>
            
            <a href="index.php"><button type="button" name="cancelar" class="btn btn-default">Cancelar</button></a>
            <button type="reset" name="borrar" class="btn btn-default">Borrar</button>
            <button type="submit" name="publicar" class="btn btn-primary">Publicar</button>
          </form>
        </article> 
      </section> 
      <footer>
        <p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
      </footer>
  </div>
</body>
</html>


