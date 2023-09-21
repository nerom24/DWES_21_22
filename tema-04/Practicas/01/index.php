<?php 
    include "classCalculadora.php";
    $calculadora = new calculadora();
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $calculadora->setValor1($_POST['n1']);
        $calculadora->setValor2($_POST['n2']);
       

        switch (true) {
            
            case (isset($_POST['sumar'])):
                 $calculadora->suma();
                break;
            case (isset($_POST['restar'])):
                 $calculadora->resta();
                break;
             case (isset($_POST['multiplicar'])):
                 $calculadora->multiplicacion();
                break;
            case (isset($_POST['dividir'])):
                 $calculadora->division();
                break;
            case (isset($_POST['exp'])):
                 $calculadora->potencia();
                break;
             case (isset($_POST['borrar'])):
                 $calculadora = new calculadora();
                break;
        
        }


       /* if (isset($_REQUEST['sumar'])) {
            $calculadora->suma();
        } elseif (isset($_POST['restar'])) {
            $calculadora->resta();
        } elseif (isset($_POST['multiplicar'])) {
            $calculadora->multiplicacion();
        } elseif (isset($_POST['dividir'])) {
            $calculadora->division();
        } elseif (isset($_POST['exp'])) {
            $calculadora->potencia();
        } elseif (isset($_POST['borrar'])) {
            $calculadora = new calculadora();
        }
    }*/
    
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>        
        <header class="jumbotron text-center">
            <h1>Act. 4.1 Calculadora Básica - POO</h1>
                    <h2>Tema 4. Programación Orientada a Objetos</h2>
        </header>
       
        <div class="container">
            <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <!-- Primer Campo -->
                    <div class="form-group">
                        <span class="label">Número 1:</span>
                        <input type="number" name="n1" id="inputN1" class="form-control" step="1" required="required" title="Operando 1" 
                        placeholder="0" value = "<?=$calculadora->getValor1() ?>"
                        >
                    </div>
                    <!-- Segundo Campo -->
                    <div class="form-group">
                        <span class="label">Número 2:</span>
                        <input type="number" name="n2" class="form-control" step="1" required="required" title="Operando 2"  placeholder="0"
                        value = "<?=$calculadora->getValor2() ?>"
                        >  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <span class="label">Resultado:</span>
                        <input type="text" name="resultado" placeholder="0" disabled class="form-control" value="<?=$calculadora->getResultado();?>">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="btn-toolbar border" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button type="submit" name="sumar" class="btn btn-default border">+
                        </button>
                        <button type="submit" name="restar" class="btn btn-default border">-</button>
                        <button type="submit" name="multiplicar" class="btn btn-default border">*</button>
                        <button type="submit" name="dividir" class="btn btn-default border">/</button>
                        <button type="submit" name="exp" class="btn btn-default border">Exp</button>
                      </div>
                      <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit" name="borrar" class="btn btn-secondary">Borrar</button>
                      </div>
                    </div>
                </div>
            </div>      
            </form>
   
    <footer>
            <hr>
            <p>&copy; DWES Juan Carlos Moreno - 2º DAW - Curso 18/19</p>
    </footer>
     </div>
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>