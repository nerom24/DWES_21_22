<?php 

	class Fichero {

		private $nomFichero;
		
		function __construct($nombre){
			$this->nomFichero = $nombre; 
		}

		public function registrarNoticia($noticia){
			$arrayDatos = array(
				$noticia->__GET('titulo'), 
				$noticia->__GET('fecha'), 
				$noticia->__GET('autor'), 
				$noticia->__GET('tematica'), 
				$noticia->__GET('contenido'), 
				$noticia->__GET('imagen')
			);
			if (!$fp = fopen("$this->nomFichero", "ab") ) {
				echo "No se ha abierto el archivo";
			} else { 
				fputcsv( $fp, $arrayDatos, ";" );
			}
			fclose($fp);
		}

		public function leerNoticias(){ 
			if (file_exists($this->nomFichero)){
				$fp = fopen($this->nomFichero, "rb");
				$arrayDatos = array();
				while ($contenido =  fgetcsv($fp, 1000, ";")){
					array_push($arrayDatos, $contenido);
				}
			    fclose($fp);			
				return array_reverse($arrayDatos);
			} else{
				return null;
			}
		}


	/*	public function mostrarNoticia($noticia){ ?>
			<article>
				<?php $ruta="imagenes/".$noticia[5]; ?>
				<img src=<?php echo $ruta; ?> class="img-rounded" width="40%">
				<hgroup>
					<h4>
						<?php echo $noticia[0]; ?>
					</h4>
				</hgroup>
				<address>
  					<strong><?php echo $noticia[2]; ?></strong><br>
  					<?php echo $noticia[1]; ?><br>
  					<?php echo $noticia[3]; ?>
				</address>
				<p><?php echo $noticia[4]; ?></p>
				
			</article>
		<?php 
				
		}*/

		public function mostrarNoticia($noticia){ ?>
			<div class="panel panel-default">
	  			<div class="panel-heading">
	  			<h3><?php echo $noticia[0]; ?></h3>
	  			<?php echo '<br>'.$noticia[3].' - '.$noticia[1];; ?>
	  			</div>
	  			<div class="panel-body">
	    			<?php $ruta="imagenes/".$noticia[5]; ?>
					<img src=<?php echo $ruta; ?> class="img-rounded" width="50%">
					<p></p>
					<p><?php echo $noticia[4]; ?></p>
					<address>
  					<strong><?php echo $noticia[2] ?></strong><br>
					</address>
	  			</div>
			</div>
		<?php 
				
		}


			
	}
 ?>