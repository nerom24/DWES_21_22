<?php
  class usuario {
  public $cUsuario;
  public $cEmail;
  public $cTipo;
  public $cClave;

  public function __construct($pUsuario, $pEmail, $pTipo, $pClave)
  {
    $this->cUsuario=$pUsuario;
    $this->cEmail=$pEmail;
    $this->cTipo=$pTipo;
    $this->cClave=$pClave;
  }
  
  Public function getUsuario() {
    return $this->cUsuario;
  }

   Public function getEmail() {
    return $this->cEmail;
  }

   Public function getTipo() {
    return $this->cTipo;
  }

   Public function getClave() {
    return $this->cClave;
  }

  Public function setUsuario($pUsuario) {
    $this->cUsuario=$pUsuario;
  }

   Public function setEmail($pEmail) {
    $this->cEmail=$pEmail;
  }

  Public function setTipo($pTipo) {
   $this->cTipo=$pTipo;
  }

  Public function setClave($pClave) {
   $this->cClave=$pClave;
  }
}

// Definimos la clase agenda como un array de usuarios
class agenda {
  private $array=array();

// Existe usuario
public function Existe($pUsuario){
      foreach($this->array as $indice => $usuario){
        if($usuario->getUsuario() == $pUsuario){
          return $indice;
        }
      }
      return false;
    }

// Contar Usuarios
public function getNumUsuarios(){
      return count($this->array);
    }   

//Metodo para añadir usuario al array
    public function insertaUsuario($p){
      $usuario=$p->getUsuario();
      if (!$this->Existe($usuario))  $this->array[]=$p;
    }

  //Metodo para eliminar la persona del array
    public function eliminarUsuario($pUsuario){

      if (($indice=$this->Existe($pUsuario)) !==false )
        unset($this->array[$indice]);
    }

//Ordena por nombre.
    private function ordenar($obj1, $obj2)
    {
      return $obj1->getUsuario() > $obj2->getUsuario();
    }

    public function OrdenarPorUsuario(){
      usort($this->array, "Agenda::ordenar"); 
    }

  public function eliminarUsuarios($pCheck){
  foreach ($pCheck as $seleccion=>$usuario){
      $this->eliminarUsuario($usuario);
  }
  }

 public function allNoSeleccion($pCheck){
  foreach ($pCheck as $seleccion=>$valores){
    unset ($pCheck[$seleccion]);
  }
  return $pCheck;
  }


public function actualizarUsuario ($usuario, $email, $tipo, $clave) {
  if (($pos=$this->Existe($usuario)) !==false ) {
    $usuario=$this->array[$pos];
    $this->array[$pos]->setEmail($email);
    $this->array[$pos]->setTipo($tipo);
    $this->array[$pos]->setClave($clave);
}
}

public function mostrarUsuario($pUsuario){
   echo '<tr>';
   echo '<td>';
   ?>
   <input type="checkbox" value="<?php echo $pUsuario->getUsuario(); ?>" name="check[]" 
    <?php
      if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_REQUEST['allSeleccion']))) {
        //Selecciono todos los usuarios
        echo 'checked="checked"';
      }
    ?>
   >
   <?PHP
   echo '</td>';
  echo '<td>'.$pUsuario->getUsuario().'</td>';
  echo '<td>'.$pUsuario->getEmail().'</td>';
  echo '<td>'.$pUsuario->getTipo().'</td>';
  echo '<td>'.$pUsuario->getClave().'</td>';
  echo '</tr>';
}

public function cabeceraTab () {
    ?>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th>.</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Contraseña</th>
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


public function mostrarAgenda(){
  $this->cabeceraTab();
  $this->ordenarPorUsuario();
  foreach ($this->array as $usuario) {
    $this->mostrarUsuario($usuario);
  }
  $this->pieTab();
  echo " Total Usuarios: ". $this->getNumUsuarios();
  }
}

