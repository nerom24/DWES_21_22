<?php require 'views/template/header-cdn.php'; ?>

<div class="container">

    <!-- Cabecera -->
    <div class="jumbotron">
            <h1 class="display-4">Gesbank</h1>
            <p class="lead">Detalles de Cliente</p>
    </div>
    <!-- Menú Desactivado -->
    <?php  require 'views/template/mainmenu.php'; ?>
    
    <!-- Mensajes -->
    <?php if (!empty($this->mensaje)) {
        require 'views/template/mensajes.php';
    }
    
    ?>
    
    <div class="card">
        <div class="card-header">
            Actualizar Cliente
        </div>
        <div class="card-body">
            <h5 class="card-title">Actualizar Cliente</h5>
            
            <?php require 'views/consulta/formEditCliente.php' ?>

        </div>
    </div>
    <?php require 'views/template/pie.php'; ?>
</div>
<?php require 'views/template/footer-cdn.php'; ?>