<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>        
        <header class="jumbotron text-center">
            <h1>Calculadora Básica - POO</h1>
            <h2>Tema 4. Programación Orientada a Objetos</h2>
        </header>
        <section>
            <div class="container">
            <div class="row">
                <!-- Capa Formulario -->
                <div class="col-sm-8">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <div class="col-sm-3">
                                Numero 1:
                            </div>
                            <div class="col-sm-9">
                                <input type="number" name="n1" class="form-control" placeholder="0" value="0">
                            </div>
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="form-group">
                            <div class="col-sm-3">
                                Numero 2:
                            </div>
                            <div class="col-sm-9">
                                <input type="number" name="n2" class="form-control" placeholder="0" value="0">
                            </div>
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="form-group text-center">
                            <div class="col-sm-3">
                                <button type="submit" name="sumar" class="btn btn-danger">Sumar</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="restar" class="btn btn-info">Restar</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="multiplicar" class="btn btn-warning">Multiplicar</button>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" name="dividir" class="btn btn-success">Dividir</button>
                            </div>                            
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 text-center">
                    <h2>Resultado:</h2>
                    <?php
                    include 'Calculadora.php';
                    $calculadora = new Calculadora();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $calculadora->setNumero1($_POST['n1']);
                        $calculadora->setNumero2($_POST['n2']);
                        if (isset($_POST['sumar'])) {
                            $calculadora->Sumar();
                        } elseif (isset($_POST['restar'])) {
                            $calculadora->Restar();
                        } elseif (isset($_POST['multiplicar'])) {
                            $calculadora->Multiplicar();
                        } elseif (isset($_POST['dividir'])) {
                            $calculadora->Dividir();
                        }
                    }
                    ?>
                </div>
            </div>
            </div>
        </section>
        <footer class="text-center text-info navbar-fixed-bottom">
            <p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
        </footer>   
    </body>
</html>