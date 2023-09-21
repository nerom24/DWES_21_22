<?php
	include "alumno.entidad.php";
	require ('fpdf/fpdf.php'); 
		class PDF extends FPDF
	{
		
	//Cabecera de página
	function Header(){
			
		$this->SetFont('Arial','B',10);
		$this->Cell(30,10,'Javier holgado',"B",0,'L');
		$this->Cell(160,10,'Actividad 8.4 ',"B",0,'R');
		$this->Ln(20);
		$this->mostrarTablaBasica(array("#","Apellidos","Nombre","Email","Telefono","Curso"));
	}
	function footer(){
		$this->SetY(-15);
   		$this->SetFont('Arial','I',8);
    	$this->Cell(0,10,'Pagina numero: '.$this->PageNo());

	}
	function mostrarAlumnoPdf($alumno,$cont,$model){
		if ($cont % 2 == 0) {
			$this->SetFillColor(220,220,220);
		}else{
			$this->SetFillColor(255,255,255);
		}
		$this->SetFont('Arial','I',10);
		$this->Cell(10,5,$cont,0,0,'R',true);
		$this->Cell(40,5,utf8_decode($alumno->__GET('apellidos')),0,0,'L',true);
		$this->Cell(30,5,utf8_decode($alumno->__GET('nombre')),0,0,'L',true);
		$this->Cell(50,5,utf8_decode($alumno->__GET('email')),0,0,'L',true);
		$this->Cell(30,5,utf8_decode($alumno->__GET('telefono')),0,0,'R',true);
		$this->Cell(30,5,utf8_decode($model->obtenerNombreCurso($alumno->__GET('idCurso'))),0,0,'L',true);
		$this->ln();
	}
	function mostrarTablaBasica($cabecera){
		
		$this->Cell(10,7,$cabecera[0],'B',0,'R');
		$this->Cell(40,7,$cabecera[1],'B',0,'L');
		$this->Cell(30,7,$cabecera[2],'B',0,'L');
		$this->Cell(50,7,$cabecera[3],'B',0,'L');
		$this->Cell(30,7,$cabecera[4],'B',0,'R');
		$this->Cell(30,7,$cabecera[5],'B',0,'L');
		$this->Ln();
		
		
	}
}
?>