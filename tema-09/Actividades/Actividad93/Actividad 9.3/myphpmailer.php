<?php 
	include 'PHPMailer/PHPMailerAutoload.php';
	/**
	* 
	*/
	class MyPHPMailer extends PHPMailer
	{
		public function transformarTexto($html){
			$this->AltBody = strip_tags($html);
		}
		public function anadirCorreos($correos)
		{
			if (strpos($correos,",") == -1) {
				$this->addAddress($correos, 'Correo' );
			}else{
				$arrayCorreos = explode(",",$correos);
				foreach ($arrayCorreos as $key => $correo) {
					$this->addAddress($correo, 'Correo'.$key );
				}
			}
		}
		public function anadirImagenes($imagenes)
		{
			if (!empty($imagenes[0])) {
				for ($i=0; $i < count($imagenes); $i++) { 
					$this->addEmbeddedImage("imagenes/".$imagenes[$i], "imagen".$i,"imagen".$i,'base64','image/jpeg'); 
					$this->Body .= "<img src='cid:imagen".$i."' alt='my-photo'>";
				}
			}
		}
		public function anadirArchivos($archivos)
		{
			if (!empty($archivos[0])) {
				for ($i=0; $i < count($archivos); $i++) { 
					$this->addAttachment("archivos/".$archivos[$i]);
				}
			}
		}
		public function anadirCC($correos)
		{
			if (strpos($correos,",") == -1) {
				$this->addCC($correos, 'CorreoCC' );
			}else{
				$arrayCorreos = explode(",",$correos);
				foreach ($arrayCorreos as $key => $correo) {
					$this->addCC($correo, 'CorreoCC'.$key );
				}
			}
		}
		public function anadirBCC($correos)
		{
			if (strpos($correos,",") == -1) {
				$this->addBCC($correos, 'CorreoBCC' );
			}else{
				$arrayCorreos = explode(",",$correos);
				foreach ($arrayCorreos as $key => $correo) {
					$this->addBCC($correo, 'CorreoBCC'.$key );
				}
			}
		}
	}

 ?>