<?php
  class articulo {
  
  protected $cCodigo;
  protected $cDescripcion;
  protected $cPrecio;
     
  public function __construct($pCodigo, $pDescripcion, $pPrecio)
  {
    $this->cCodigo=$pCodigo;
    $this->cDescripcion=$pDescripcion;
    $this->cPrecio=$pPrecio;
  }
  
   public function getCodigo()
    {
        return $this->cCodigo;
    }

   
    public function setCodigo($cCodigo)
    {
        $this->cCodigo = $cCodigo;

        return $this;
    }

   
    public function getDescripcion()
    {
        return $this->cDescripcion;
    }

    
    public function setDescripcion($cDescripcion)
    {
        $this->cDescripcion = $cDescripcion;

        return $this;
    }

   
    public function getPrecio()
    {
        return $this->cPrecio;
    }

   
    public function setPrecio($cPrecio)
    {
        $this->cPrecio = $cPrecio;

        return $this;
    }

}



// Definimos la clase agenda como un array de usuarios
class listaArticulos {
  public $array=array();

// Existe usuario
public function Existe($pCodigo){
      foreach($this->array as $indice => $articulo){
        if($articulo->getCodigo() === $pCodigo){
          return $indice;
        }
      }
      return false;
    }

//Metodo para añadir usuario al array
    public function insertaArticulo($a){
      $codigo=$a->getCodigo();
      if (!$this->Existe($codigo))  $this->array[]=$a;
    }

// Contar Usuarios
public function getNumArticulos(){
      return count($this->array);
    }   

//Ordena por nombre.
    private function ordenar($obj1, $obj2)
    {
      return $obj1->getCodigo() > $obj2->getCodigo();
    }

    public function OrdenarPorCodigo(){
      usort($this->array, "listaArticulos::ordenar"); 
    }


 public function allNoSeleccion($pCheck){
  foreach ($pCheck as $seleccion=>$valores){
    unset ($pCheck[$seleccion]);
  }
  return $pCheck;
  }


public function mostrarArticulo($pArticulo){
   echo '<tr>';
   echo '<td>';
   ?>
   <input type="checkbox" value="<?php echo $pArticulo->getCodigo(); ?>" name="check[]" 
    <?php
      if (isset($_REQUEST['allSeleccion'])) {
        //Selecciono todos los usuarios
        echo 'checked="checked"';
      }
    ?>
   >
   <?PHP
   echo '</td>';
  echo '<td>'.$pArticulo->getCodigo().'</td>';
  echo '<td>'.$pArticulo->getDescripcion().'</td>';
  //echo '<td>'.$pArticulo->getPrecio().' €'.'</td>';
  echo '<td>'.number_format($pArticulo->getPrecio(),2,',','.').' €'.'</td>';
  echo '</tr>';
}

public function cabeceraTab () {
    ?>
    <table class="table table-striped table-hover">
    <thead><tr><th colspan=4>Tabla de Artículos</th></tr></thead>
    <thead>
        <tr>
        <th>.</th>
        <th>Código</th>
        <th>Descripción</th>
        <th>Precio</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    }

public function pieTab()
    {
    ?>
    </tbody>
    </table>
    <?php
    }


public function mostrarListaArticulos(){
  $this->cabeceraTab();
  $this->ordenarPorCodigo();
  foreach ($this->array as $articulo) {
    $this->mostrarArticulo($articulo);
  }
  $this->pieTab();
  echo " Total Articulos: ". $this->getNumArticulos();
  }
}

