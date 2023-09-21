<?php require 'views/template/header-cdn.php'; ?>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a MVC</h1>
        <p class="lead">Página de Consulta</p>
    </div>
    <?php  require 'views/template/mainmenu.php'; ?>

    <!-- Mensajes -->
    <?php if (!empty($this->mensaje)) {
        require 'views/template/mensajes.php';
    } ?>

    <div class="card">
        <div class="card-header">
            Tabla de Clientes
        </div>
        <div class="card-body">
             <!--  Mostrar Tabla Clientes -->
            <?php  require 'views/consulta/mostrarTabla.php'; ?>        
        </div>
    </div>
    
    <?php require 'views/template/pie.php'; ?>
</div>
<?php require 'views/template/footer-cdn.php'; ?>