<?php require 'views/template/header-cdn.php'; ?>
<div class="container">
    <?php  require 'views/template/mainmenu.php'; ?>
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a MVC</h1>
        <p class="lead"><?php echo $this->mensaje ?></p>
        <hr class="my-4">
    
    </div>
    <?php require 'views/template/pie.php'; ?>
</div>
<?php require 'views/template/footer-cdn.php'; ?>