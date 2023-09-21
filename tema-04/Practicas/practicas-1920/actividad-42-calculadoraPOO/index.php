<?php 
    require_once ("class/calculadora.php");
    
    $calculadora = new calculadora();
    $operacion = null;
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $calculadora->setValor1($_POST['valor1']);
        $calculadora->setValor2($_POST['valor2']);
       

        switch (true) {
            
            case (isset($_POST['sumar'])):
                 $calculadora->suma();
                 $operacion = "Suma";
                break;
            case (isset($_POST['restar'])):
                 $calculadora->resta();
                 $operacion = "Resta";
                break;
             case (isset($_POST['multiplicar'])):
                 $calculadora->multiplicacion(); 
                 $operacion = "Multiplicación";
                break;
            case (isset($_POST['dividir'])):
                 $calculadora->division();
                 $operacion = "División";
                break;
            case (isset($_POST['exp'])):
                 $calculadora->potencia();
                 $operacion = "Potencia";
                break;
             case (isset($_POST['borrar'])):
                 $calculadora = new calculadora();
                break;
        
        }
    
    }
 ?>
 <!DOCTYPE html>
<html>
    <?php require_once("template/partials/head.php")?>
    <body>        
    <?php require_once("template/partials/cabecera.php")?>
       
        <div class="container">
            <legend>Calculdadora POO - <?= $operacion ?> </legend>
            <form action="" method="POST">         
                
                    <!-- Primer Campo -->
                    <div class="form-group">
                        <span class="label">Valor 1:</span>
                        <input type="number" name="valor1" class="form-control" step="1" required="required" title="Operando 1" 
                        placeholder="0" value = "<?=$calculadora->getValor1() ?>"
                        >
                        <small id="emailHelp" class="form-text text-muted">Primer operando</small>
                    </div>
                    <!-- Segundo Campo -->
                    <div class="form-group">
                        <span class="label">Valor 2:</span>
                        <input type="number" name="valor2" class="form-control" step="1" required="required" title="Operando 2"  placeholder="0"
                        value = "<?=$calculadora->getValor2() ?>"
                        > 
                        <small id="emailHelp" class="form-text text-muted">Segundo operando</small> 
                    </div>            
            
                    <div class="form-group">
                        <span class="label">Resultado:</span>
                        <input type="text" name="resultado" placeholder="0" disabled class="form-control" value="<?=$calculadora->getResultado();?>">
                        <small id="emailHelp" class="form-text text-muted"><?= $operacion ?></small> 
                    </div>
           
                    <button type="submit" name="sumar" class="btn btn-primary border">Sumar</button>
                    <button type="submit" name="restar" class="btn btn-primary border">Restar</button>
                    <button type="submit" name="multiplicar" class="btn btn-primary border">Multiplicar</button>
                    <button type="submit" name="dividir" class="btn btn-primary border">Dividir</button>
                    <button type="submit" name="exp" class="btn btn-primary border">Exp</button>
            
                    <button type="submit" name="borrar" class="btn btn-secondary">Borrar</button>
                    
                        
                      
                      
                        
                   
               
            </form>
            <?php require_once("template/partials/footer.php")?>
            </div>
     <?php require_once("template/partials/javascript.php")?>
    </body>
</html>
