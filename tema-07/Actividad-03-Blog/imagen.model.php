<?php 

	class Imagen{
		
		private $nombre; 
		private $nombreTemp; 
		private $tipo;
		private $error; 
		private $tamano; 
		static $maxTamano = 1048576; 
		static $carpeta = "imagenes"; 
		static $minAncho = 400;
		static $minAlto;

		function __construct($imagen){
			$this->nombre = $imagen['name'];
			$this->nombreTemp = $imagen['tmp_name'];
			$this->tipo = $imagen['type'];
			$this->error = $imagen['error'];
			$this->tamano = $imagen['size'];
		}

		public function valTamano(){
			if ($this->tamano < self::$maxTamano) {
				return true;
			} else {
				echo "error";
				return false;
			}
		}

		public function valFormato(){
			$tipo = exif_imagetype($this->nombreTemp);
			if (!($tipo == IMAGETYPE_JPEG || $tipo == IMAGETYPE_GIF || $tipo == IMAGETYPE_PNG)) {
				echo "errorFormato";
				return false;
			}
			return true; 
		}

		public function valResolucion(){
			list($anchura, $altura) = getimagesize($this->nombreTemp);
			if (($anchura < self::$minAncho)) {
				echo "errorResolucion";
				return false;
			}
			return true;
		}

		public function moverImagen(){
			if (is_uploaded_file($this->nombreTemp)) {
				$ruta = self::$carpeta;
				if (is_dir($ruta)) {
					move_uploaded_file($this->nombreTemp, "$ruta/$this->nombre");
					//return true;
				} else{
					mkdir($ruta);
					move_uploaded_file($this->nombreTemp, "$ruta/$this->nombre");
				}
			}
		}
	}
 ?>