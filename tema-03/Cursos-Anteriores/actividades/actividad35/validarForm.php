<?php 
	function validarcaracteres($valor){			
		$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ "; 
		if(trim($valor) == ''){
			return false;	
		}else{
			for ($i=0; $i<strlen($valor); $i++){
      		if (strpos($permitidos, substr($valor,$i,1))===false){
         		return false;
         	}
      	}
      		return true;
		}
	}
	function validarUsuarioContra($valor){			
		$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_"; 
		if(trim($valor) == ''){
			return false;	
		}else{
			for ($i=0; $i<strlen($valor); $i++){
      		if (strpos($permitidos, substr($valor,$i,1))===false){
         		return false;
         	}
      	}
      		return true;
		}
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (validarcaracteres($_POST['inputNombre']) && validarcaracteres($_POST['inputApellidos']) && validarUsuarioContra($_POST['inputUsuario'])
			&& validarUsuarioContra($_POST['inputPassword']) && !empty($_POST['Checkbox'])) {
			echo "Validado";
		}else { 
			echo "No cumple";
		}
	}
 ?>