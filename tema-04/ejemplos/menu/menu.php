//Cabecera
<?php
class Cabecera     // Camel Case: Escribir la primera letra de la clase en mayuscula
{
	private $texto; //Atributo
	public function __construct($titulo) //Metodo
	{
		$this->texto = $titulo;
	}
	
	public function graficar() //Metodo
	{
		//echo"<h1>".$this->texto."</h1>";
		?>
		<h1><?php echo $this->texto;?></h1>
		<?php
	}
}
//*************************************************************************
//Menu
class Menu
{
	private $link;
	public function graficar()
	{	
		?>
<ul id="menu_navegacion" class="menu_nav"><?php echo $this->link;
		$menu[] = array('Inicio' => array('Mision', 'Vision', 'Nosotros'));
		$menu[] = array('Nosotros' => array('La empresa', 'Servicios', 'Portafolio'));
		$menu[] = array('Servicios' => array('Dise&ntilde;o web', 'Dise&ntilde;o grafico', 'SEO', 'Marketing'));
		$menu[] = array('Contacto' => array('Redes sociales', 'Telefonos', 'Formulario', 'Mapa'));
		
		foreach ($menu as $menu_key => $menu_item)
		{
			foreach ($menu_item as $menu_name => $sub_menu)
			{
				echo "<li><a href='#'>".$menu_name."</a>";
				if(isset($sub_menu))
				{
					echo "<ul>";
					foreach($sub_menu as $items)
					{
						echo"<li><a href='#'>".$items."</a>";
					}
					echo "</ul>";
				}
				echo "</li>";
			}			
		}
		
	}
}
?>
</ul>
<?php
//*************************************************************************
//Contenido
class contenido
{
	private $lineas = array();
	
	public function iniciar_linea($li)
	{
		$this->lineas[] = $li;
	}
	
	public function graficar()
	{
		for ($i=0;$i<sizeof($this->lineas);$i++)
		{
			?>	
            <p id="img_php"><img src="img/php_img_web_oop.jpg" width="300" height="336"></p>		
            <p id="text_der_img_php"><?php echo $this->lineas[$i];?></p>
			<?php
		}
	}
}
//*************************************************************************
//Pie de Pagina
class Footer
{
	private $texto;
	public function __construct($cadena)
	{
		$this->texto = $cadena;
	}
	
	public function graficar()
	{
		?>
		<hr/>
		<?php echo $this->texto;?>
		<?php
	}
}
//*************************************************************************
//Creamos una clase para implementar la colaboracion de clases o objetos
class Pagina
{
	private $cabecera;
	private $menu;
	private $body;
	private $pie;
	public function __construct($texto_cabecera,$texto_pie)
	{
		$this->cabecera = new Cabecera($texto_cabecera);
		$this->menu = new Menu();
		$this->body = new contenido();
		$this->pie = new Footer($texto_pie);
	}
	
	public function iniciar_contenido($texto)
	{
		$this->body->iniciar_linea($texto);
	}
	
	public function vista()
	{
		echo "<div id=contenedor>";
		echo "<div id=cabecera>"; $this->cabecera->graficar(); echo "</div>";
		echo "<div id=menu>"; $this->menu->graficar(); echo "</div>";
		echo "<div id=contenido>"; $this->body->graficar(); echo "</div>";
		echo "<div id=footer>"; $this->pie->graficar(); echo "</div>";
		echo "</div>";
	}
}
//*************************************************************************
//Ahora creamos la vista de nuestra web
$pag = new Pagina("Bienvenido a mi Web","Desarrollado por Juan Castro Lurita - 2013");
$pag->iniciar_contenido(
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet lectus sit amet tortor imperdiet iaculis. Cras ornare scelerisque libero et pellentesque. Mauris malesuada interdum sapien a porta. Curabitur cursus odio et nibh pretium, quis ornare purus aliquet. Aliquam gravida sodales convallis. Fusce nec viverra quam. Proin ultrices augue massa, in accumsan dui volutpat a. Quisque fringilla augue at nisl sagittis vestibulum. Duis venenatis, mauris in pharetra aliquet, ipsum massa aliquam lectus, ut volutpat nisl arcu iaculis turpis. Ut vehicula sollicitudin diam, ut pulvinar justo ornare vitae. Sed gravida auctor faucibus. Sed vel risus ac lorem commodo tincidunt a in dui. Fusce tellus magna, adipiscing et suscipit eget, malesuada at orci. Aenean vitae dignissim velit. Sed facilisis tempor lacus ac bibendum.
<br/>
<br/>
Nullam et lacus lobortis, congue erat at, lacinia eros. Ut dictum sodales nisi id convallis. Fusce posuere quam eget orci interdum sagittis. Maecenas vitae elementum sem. Sed et massa sem. Phasellus ac lobortis est. Praesent sit amet euismod leo. Maecenas sagittis vel ligula vitae imperdiet. Etiam condimentum elit nibh. Aliquam urna purus, sollicitudin quis est nec, convallis aliquet leo. Cras elementum, est sed feugiat sollicitudin, lorem ante venenatis urna, quis consectetur libero odio sed libero. Mauris nisi arcu, molestie ac enim nec, sagittis scelerisque turpis. Fusce sodales, nulla a venenatis eleifend, quam velit venenatis dui, vel aliquam lorem odio a lacus. Morbi vehicula felis lectus. Mauris faucibus, ante sed cursus imperdiet, est urna suscipit libero, vitae. "
);
$pag->vista();
?>		