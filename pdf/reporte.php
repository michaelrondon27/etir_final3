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
//Cabecera de p�gina

	//Logo
	$pdf->Image('logoetir.png',10,10);
	
	//Arial bold 15
	$pdf->SetFont('Arial','B',14);
	//Movernos a la derecha
	//T�tulo
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'REPUBLICA BOLIVARIANA DE VENEZUELA',0,0,'C');
	$pdf->Ln(6);
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'ESCUELA TECNICA INSDUSTRIAL ROBINZONIANA JULIO CALCA�O',0,0,'C');
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
	$pdf->Cell(230,8,'	Estimado Sr. XXXXX, la raz�n de esta misiva es para solicitare cordialmente me d� un permiso de trabajo por XXXXX',0,0,'C'); 
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	d�as h�biles para XXXXXXXXXXXXXXXXXXXXXXXXX desde el XX de XXXXX de XXXX hasta el XX de XXXXX de XXXX, ya que',0,0,'C');
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	�ltimamente me he XXXXXXXXXXXXX y en mi visita al m�dico me recomend� que me XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',0,0,'C');
	$pdf->Ln(6);
	$pdf->Cell(60);
	$pdf->Cell(230,8,'	XXXXXXXXX. Adjunto el certificado m�dico escrito por el Doctor XXXXXXXXXXXX, con las recomendaciones realizadas.',0,0,'C');
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
