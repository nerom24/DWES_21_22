<?php

class Cabecera {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function mostrar()
  {
    echo '<h3 class="text-justify">'.$this->titulo.'</h3>';
  }
}

class Imagen {
  private $imagen;
  
  public function __construct($img)
  {
    $this->imagen=$img;
  }

  public function mostrar()
  {
    echo '<img class="img-responsive img-thumbnail center-block" src="fotos/'.$this->imagen.'">';
    echo '<br>';
  }
}

class Cuerpo {
  private $lineas;

  public function __construct() {
    $this->lineas=array();
  }

  public function insertarParrafo($li)
  {
    $this->lineas[]=$li;
  }
  
  public function mostrar(){
  foreach ($this->lineas as $parrafos) {
    echo '<p class="text-justify">'. $parrafos . '</p>';
    }
  }

}

class Pie {
  private $titulo;
  public function __construct($tit)
  {
    $this->titulo=$tit;
  }
  public function mostrar()
  {
    echo '<h6 class="text-right">'.$this->titulo.'</h6>';
  }
}

class Pagina {
  private $cabecera;
  private $imagen;
  private $cuerpo;
  private $pie;
  public function __construct($texto1, $image, $texto2)
  {
    $this->cabecera=new Cabecera($texto1);
    $this->imagen=new Imagen($image);
    $this->cuerpo=new Cuerpo();
    $this->pie=new Pie($texto2);
  }
  public function insertarCuerpo($texto)
  {
    $this->cuerpo->insertarParrafo($texto);
  }
  public function mostrar()
  {
    $this->cabecera->mostrar();
    $this->imagen->mostrar();
    $this->cuerpo->mostrar();
    $this->pie->mostrar();
  }
}