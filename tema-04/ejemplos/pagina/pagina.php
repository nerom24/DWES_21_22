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
  private $cuerpo;
  private $pie;
  public function __construct($texto1, $texto2)
  {
    $this->cabecera=new Cabecera($texto1);
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
    $this->cuerpo->mostrar();
    $this->pie->mostrar();
  }
}