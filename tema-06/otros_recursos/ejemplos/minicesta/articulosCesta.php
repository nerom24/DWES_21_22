 <?php 
 
 class lineacompra extends articulo{

  private $cUnidades;
  private $cSubtotal;

public function __construct($pCodigo, $pDescripcion, $pPrecio, $pUnidades)
  {
    $this->cCodigo=$pCodigo;
    $this->cDescripcion=$pDescripcion;
    $this->cPrecio=$pPrecio;
    $this->cUnidades=$pUnidades;
    $this->cSubtotal=$pPrecio*$pUnidades;
  }

    public function getUnidades()
    {
        return $this->cUnidades;
    }


    public function setUnidades($cUnidades)
    {
        $this->cUnidades = $cUnidades;

        return $this;
    }


    public function getSubtotal()
    {
        return $this->cSubtotal;
    }


    public function setSubtotal($cSubtotal)
    {
        $this->cSubtotal = $cSubtotal;

        return $this;
    }
}

// Definimos la clase cesta como un array de artículos tipo cesta
class cesta {
  private $array=array();


// Existe 
public function existe($pCodigo){
    foreach($this->array as $indice => $articulo){   
        if($articulo->getCodigo() == $pCodigo){
          return $indice;
        }
      }
      return false;
    }

// Creamos objeto lineacesta 
public function CrearObjetoLinea($pCodigo, $pArticulos){
    
      foreach ($pArticulos as $listarticulo){
        foreach ($listarticulo as $articulo) {
            
            if($articulo->getCodigo() == $pCodigo){
                $objeto= new lineacompra(
                            $pCodigo, 
                            $articulo->getDescripcion(),
                            $articulo->getPrecio(),
                            1);
            return $objeto;
            }
        }
    }
}

//Metodo para añadir artículo a la cesta
public function echarCesta($pCheck, $pArticulos){
        
    foreach ($pCheck as $codigo){
        $indCesta=$this->existe($codigo);
        if ($indCesta === false){  
            //Añadir objeto a la cesta 
            $this->array[]=$this->CrearObjetoLinea($codigo, $pArticulos);
        }
        else
        {
            //Actualizar objeto cesta
            $this->actualizarCesta($indCesta);
        }
    }
    
}

public function actualizarCesta($indCesta){
    
    $unidades=$this->array[$indCesta]->getUnidades();
    $precio=$this->array[$indCesta]->getPrecio();
    $this->array[$indCesta]->setUnidades($unidades+1);
    $this->array[$indCesta]->setSubtotal($precio * ($unidades+1));
}

public function totalCompra() {
    $total=0;
    foreach ($this->array as $value) {
        $total += $value->getSubtotal();
    }
    return $total;
}

public function mostrarTotal() {
    setlocale(LC_NUMERIC, 'es_ES');
    echo '<tr>';
    echo '<th>Total Compra:</th>';
    echo '<th class="text-right" colspan=5>';
    echo number_format($this->totalCompra(),2,',','.').' €';
    echo '</th>';
    echo '</tr>';
}

// Contar Usuarios
public function getNumLineasArticulos(){
      return count($this->array);
    }   

public function mostrarLinea($num, $pArticulo){
  
  echo '<tr>';
  echo '<td>';
  echo $num+1;
  echo '</td>';
  echo '<td>'.$pArticulo->getCodigo().'</td>';
  echo '<td>'.$pArticulo->getDescripcion().'</td>';
  echo '<td class="text-right">'.$pArticulo->getPrecio().'</td>';
  echo '<td class="text-right">'.$pArticulo->getUnidades().'</td>';
  //echo '<td class="text-right">'.$pArticulo->getSubtotal().'</td>';
  echo '<td class="text-right">'.number_format($pArticulo->getSubtotal(),2,',','.').' €'.'</td>';
  echo '</tr>';
}

public function cabeceraTab () {
    ?>
    <table class="table table-striped table-hover">
    <thead><tr><th colspan=6>Cesta</th></tr></thead>
    <thead>
        <tr>
        <th>#</th>
        <th>Código</th>
        <th>Descripción</th>
        <th class="text-right">Precio (€)</th>
        <th class="text-right">Unidades</th>
        <th class="text-right">Subtotal</th>
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


public function mostrarListaCompra(){
  $this->cabeceraTab();
  foreach ($this->array as $ind=>$articulo) {
    $this->mostrarLinea($ind, $articulo);
  }
  $this->mostrarTotal();
  $this->pieTab();
  
  }
}



  ?>