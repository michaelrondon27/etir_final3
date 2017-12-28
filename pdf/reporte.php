<?php
session_start();

include("conexion.php");
include("pdf/fpdf.php");

//$ced=$_REQUEST["cedula"];
//$nom=$_REQUEST["nombre"];
//$mon=$_REQUEST["monto"];
//$tipo=$_REQUEST["tipobeca"];


$pdf = new FPDF();
$pdf->AddPage();
//Cabecera de página

	//Logo
	$pdf->Image('logoetir.png',10,10);
	
	//Arial bold 15
	$pdf->SetFont('Arial','B',14);
	//Movernos a la derecha
	//Título
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'ESCUELA TECNICA INSDUSTRIAL ROBINZONIANA JULIO CALCAÑO',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'SUB DIRECCION ADMINISTRATIVA',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->SetFont('Arial','B',11);
	$pdf->Ln(6);
	$pdf->Cell(60);
        $pdf->Cell(230,5,'SOLICITUD DE PERMISO',0,0,'C');
       // $pdf->Cell(30,10,'Listado de Tekisted',0,0);
	$pdf->Ln(6);$pdf->Ln(6);$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->cell(60,8,'Por la presente:');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	Estimado Sr. XXXXX, la razón de esta misiva es para solicitare cordialmente me dé un permiso de trabajo por XXXXX',0,0,'C'); 
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	días hábiles para XXXXXXXXXXXXXXXXXXXXXXXXX desde el XX de XXXXX de XXXX hasta el XX de XXXXX de XXXX, ya que',0,0,'C');
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	últimamente me he XXXXXXXXXXXXX y en mi visita al médico me recomendó que me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',0,0,'C');
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	XXXXXXXXX. Adjunto el certificado médico escrito por el Doctor XXXXXXXXXXXX, con las recomendaciones realizadas.',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(60,8,'Atentamente.',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(60,8,'Aprobado por',0,0,'C');
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(60,8,'Realizado por',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'Firma del Director(a)',0,0,'C');
	

//$pdf->Cell(230,8, $nom." ".$tipo, 0,0,'C');
	
  //      $pdf->Cell(230,8, $ced." ".$mon, 0,0,'C');


$pdf->Output();


?> 
