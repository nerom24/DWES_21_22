<?php
	class Persona{
		//Se declaran las variables globales que vamos a utilizar en los metodos
		private $nombre;
		private $edad;
		private $peso;
		//Metodo constructor para inicualizar la persona
		public function Persona($nombre="",$edad="",$peso=""){
			$this->nombre=$nombre;
			$this->edad=$edad;
			$this->peso=$peso;	
		}
		//Metodo que nos muestra el valor del nombre
		public function getNombre(){
			return $this->nombre;	
		}
		//Metodo para poner el nombre
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		//Metodo que nos muestra el valor de la edad
		public function getEdad(){
			return $this->edad;	
		}
		//Metodo para poner la edad
		public function setEdad($edad){
			$this->edad=$edad;
		}
		//Metodo que nos muestra el valor del peso
		public function getPeso(){
			return $this->peso;	
		}
		//Metodo para poner el peso
		public function setPeso($peso){
			$this->peso=$peso;
		}
		
	}

	class Personas{
		//Se declaran las variables globales que vamos a utilizar en los metodos
		private $array= array();

			//Metodo para comprobar si la persona que tiene el nombre por parametro esta en el array
		public function Existe($nombre){
			foreach($this->array as $indice => $persona){
				if($persona->getNombre() == $nombre){
					return $indice;
				}
			}
			return false;
		}

		//Metodo para contar las personas que hay en el array
		public function	getNumPersonas(){
			return count($this->array);
		}
		//Metodo para añadir una persona al array
		public function meterPersona($p){
			echo 'entra';
			/* if (Existe($p->getNombre())!==false) */ $this->array[]=$p;
		}
		//Metodo para eliminar la persona del array
		public function eliminarPersona($nombre){

			if (($indice=$this->Existe($nombre)) !==false )
				unset($this->array[$indice]);
		}


		//Metodo para cambiar el nombre de la persona que buscamos por el nombre
		public function cambiarNombre($nombre, $nombreNuevo){			
			if (($indice=$this->Existe($nombre)) !==false )
			{
				$persona = $this->array[$indice];
				$persona -> setNombre($nombreNuevo);

				//opcional
				//$this->array[$indice]->setNombre($nombreNuevo); 
			}
				
		}
		//Metodo para cambiar la edad de la persona que buscamos por el nombre
		public function cambiarEdad($nombre, $edadNueva){
			if (($indice=$this->Existe($nombre)) !==false )
			{
				
				$persona = $this->array[$indice];
				$persona -> setEdad($edadNueva);

				//opcional
				//$this->array[$indice]->setEdad($edadNueva); 
			}
		}

		//Metodo para cambiar el peso de la persona que buscamos por el nombre
		public function cambiarPeso($nombre, $pesoNuevo){
			if (($indice=$this->Existe($nombre)) !==false )
			{
				$persona = $this->array[$indice];
				$persona -> setPeso($pesoNuevo);

				//opcional
				//$this->array[$indice]->setPeso($pesoNuevo); 
			}
		}

		//Metodo para mostrar en una tabala los datos de las personas que estan en el array
		public function mostrarTabla(){
			echo "<table border='1'>
					<tr>
						<td>Nombre</td>
						<td>Edad</td>
						<td>Peso</td>
					</tr>";
			
			foreach($this->array as $persona){
				echo "<tr><td>".$persona->getNombre()."</td><td>".$persona->getEdad()."</td><td>".$persona->getPeso()."</td><tr>";
			}
			echo "</table>";
		}
		
		//Metodo para para mostrar los datos de las personas que estan en el array
		public function mostrarPersonas(){
			foreach($this->array as $persona){
				echo $persona->getNombre().", ".$persona->getEdad()." años, ".$persona->getPeso()." kilos<br>";
			}
		}
		
		//Ordena por nombre.
		private function ordenar($obj1, $obj2)
		{
			return $obj1->getNombre() > $obj2->getNombre();
		}
		
		//Metodo para para mostrar los datos de las personas que están en el array ordenadas por el nombre.
		public function OrdenarPorNombre(){
			usort($this->array, "Personas::ordenar"); 
			$this->mostrarTabla();
		}
	}
	
	?> 
