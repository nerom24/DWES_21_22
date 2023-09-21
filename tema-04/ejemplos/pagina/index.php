<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clase Noticia</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>        
        <header class="jumbotron text-center">
            <h1>Uso Clase Página - POO</h1>
            <h2>Tema 4. Programación Orientada a Objetos</h2>
        </header>
        <div class="container">
        <section>
            
            <?php 
            include 'pagina.php';
            // Noticia 1 
            $titulo="Convento";
            $parrafo01="La convergencia tecnológica propiciada por la llamada Revolución Digital constituye un conjunto de tecnologías cuyas aplicaciones abren un amplio abanico de posibilidades a la comunicación humana";
            $parrafo02="La aproximación entre Tecnología y Medios de
                Comunicación de Masas establece un nuevo modelo económico, productivo y social que supone la aparición de industrias, perfiles profesionales y modelos económicos hasta ahora desconocidos";
            $pie="Dwes 16/17";
            $pagina1= new pagina($titulo, $pie);
            $pagina1->insertarCuerpo($parrafo01);
            $pagina1->insertarCuerpo($parrafo02);
            
            ?>
           
            <article>
                <?php $pagina1->mostrar(); ?>
            </article>
        </section>
        
        <footer>
        <p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>  
        </footer>
        </div>
    </body>
</html>