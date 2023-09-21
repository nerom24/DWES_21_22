<?php 
include 'alumno.model.php'; 
include  'Pdfclass.php';
	$model = new AlumnoModel();
	$arrayAlumnos=$model->obtenerArray();
	$pdf= new PDF();
	$pdf->AddPage();
	$cont = 1; 
	foreach ($arrayAlumnos as $alumno) {
		$pdf->mostrarAlumnoPdf($alumno,$cont,$model);
		$cont++;				
	}
	$pdf->Output();
 ?>