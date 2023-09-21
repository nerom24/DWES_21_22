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
            <h1>Uso Clase Noticia - POO</h1>
            <h2>Tema 4. Programación Orientada a Objetos</h2>
        </header>
        <section>
            
            <?php 
            include 'pagina.php';
            // Noticia 1 
            $titulo="Convento";
            $imagen="Ubrique1.jpg";
            $parrafo01="La convergencia tecnológica propiciada por la llamada Revolución Digital constituye un conjunto de tecnologías cuyas aplicaciones abren un amplio abanico de posibilidades a la comunicación humana";
            $parrafo02="La aproximación entre Tecnología y Medios de
                Comunicación de Masas establece un nuevo modelo económico, productivo y social que supone la aparición de industrias, perfiles profesionales y modelos económicos hasta ahora desconocidos";
            $pie="Dwes 16/17";
            $pagina1= new pagina($titulo, $imagen, $pie);
            $pagina1->insertarCuerpo($parrafo01);
            $pagina1->insertarCuerpo($parrafo02);
            
            // Noticia 2
            $titulo="La Plaza";
            $imagen="Ubrique3.jpg";
            $parrafo01="La convergencia tecnológica propiciada por la llamada Revolución Digital constituye un conjunto de tecnologías cuyas aplicaciones abren un amplio abanico de posibilidades a la comunicación humana";
            $parrafo02="La aproximación entre Tecnología y Medios de
                Comunicación de Masas establece un nuevo modelo económico, productivo y social que supone la aparición de industrias, perfiles profesionales y modelos económicos hasta ahora desconocidos";
            $pie="Dwes 16/17";
            $pagina2= new pagina($titulo, $imagen, $pie);
            $pagina2->insertarCuerpo($parrafo01);
            $pagina2->insertarCuerpo($parrafo02);
            
            // Noticia 3
            $titulo="El Mojón";
            $imagen="Ubrique6.jpg";
            $parrafo01="La convergencia tecnológica propiciada por la llamada Revolución Digital constituye un conjunto de tecnologías cuyas aplicaciones abren un amplio abanico de posibilidades a la comunicación humana";
            $parrafo02="La aproximación entre Tecnología y Medios de
                Comunicación de Masas establece un nuevo modelo económico, productivo y social que supone la aparición de industrias, perfiles profesionales y modelos económicos hasta ahora desconocidos";
            $pie="Dwes 16/17";
            $pagina3= new pagina($titulo, $imagen, $pie);
            $pagina3->insertarCuerpo($parrafo01);
            $pagina3->insertarCuerpo($parrafo02);
            
            ?>
            <div class="container">
            <div class="row">
            <article div class="col-md-4">
                <?php $pagina1->mostrar(); ?>
            </article>
            <article div class="col-md-4">
                <?php $pagina2->mostrar(); ?>
            </article>
            <article div class="col-md-4">
                <?php $pagina3->mostrar(); ?>
            </article>
            </div>
           
        </section>
        
        <blockquote>
        <p>DWES - DAW 16/17</p>
        <footer>
        Programación Orientada Objeto <cite title="Source Title">PHP</cite></footer>  
        </blockquote> 
    </body>
</html>