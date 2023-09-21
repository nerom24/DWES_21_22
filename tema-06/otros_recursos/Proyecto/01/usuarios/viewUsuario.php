<!DOCTYPE html>
  <html lang="es">
  <?=$plantilla->head();?>
  <body>
  <div class="container">
      <?=$plantilla->cabecera();?>
      <!-- Especificar main-menu() -->
      <?=$plantilla->menu();?>
      <!-- Muestra el contenido de la página -->
      <section> 
      <!-- Formulario para añadir nuevo registro -->
      <?=$plantilla->formNuevoUsuario();?>
      </section> 
      <?=$plantilla->pie();?>
  </div>
  </div>
  <?=plantilla::scriptVarios();?>
  </body>
</html>
