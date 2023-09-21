<?php 

	/** Fichero: form_editar.php
    *   Descripción: Añade nuevo libro a la tabla
    *   $_GET: indice de la tabla que se desa editar
    *   Autor: Juan Carlos
	*   Fecha: 21/10/2019
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("libs/funcionesTabla.php");

    # Generamos la tabla artículos con los valores
    $tabla = generarTabla();

    # Generamos el array de categorías
    $generos = generarGeneros();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # form_editar.php?indice=xx
    
    $key = $_GET['indice'];

    # Obtengo los datos del registro que quiero modificar

    $registro = $tabla[$key];

    # Cada campo del registro lo almacenamos en una variable
    # para un tratamiento más descriptivo de los datos.

    $titulo = $registro['Título'];
    $director = $registro['Director'];
    $nacionalidad = $registro['Nacionalidad'];
    $generosRegistro = $registro['Género'];
    $ano = $registro['Año'];

?>
<!doctype html>
<html lang="es">
    <!-- head de HTML -->
    <?php require_once("template/partials/head.php"); ?>
  
    <body>
    <div class="container">
        
        <!-- Cabecera de la página -->
        <?php require_once('template/partials/cabecera.php'); ?>
        <!-- No navegador -->
        <section>
            <article>
            <?php require_once('template/formEditar.php'); ?>
            </article>
        </section>
        <!-- Pie de página -->
        <?php require_once('template/partials/footer.php'); ?>
    </div>
    <!-- Enlaces javascript -->
    <?php require_once('template/partials/javascript.php'); ?>
  </body>
</html>