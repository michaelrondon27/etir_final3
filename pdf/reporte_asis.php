<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("classpdf/fpdf.php");

/*********** Create PDF ***********************/
    $pdf = new fpdf('P','mm','A4');
	$pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
/***************  Header ***************************/
    $header_uno  = $pdf->Text(10, 15, "E.T.I.R. Julio Calcaño");
	$header_uno .= $pdf->text(10, 20, "Caracas");
	$header_uno .= 	$pdf->text(10, 25, "Plaza Sucre");
	//$header_uno .= $pdf->text(10, 30, "02124567890");
	$header_uno .= $pdf->Image("../imagenes/etirlogo.jpg", 150, 5);
	$pdf->Cell(190, 20,$header_uno);
	$pdf->Ln();
    $pdf->Cell(190, 10,"");
    $pdf->Ln();
/*************** Cuerpo del documento **************/
    $beg_bod = "Reportes de Asistencia";
    $pdf->Cell(190, 10,$beg_bod,0, 0, 'C');
    $pdf->Ln();
	//$pdf->Image("../theme/images/header_logo2.jpg", 30, 60, 150, 130);    
/**************** Campo cd_emp ****************/	
    $pdf->SetFont('Arial','B',10);
	$camp_ced = "RIF de la Empresa:";
	$camp_ced_value = $_POST["cd_emp"];
	$pdf->Cell(50, 8,$camp_ced,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_ced_value,1);
	$pdf->Ln();
	
	/**************** Campo nombre de la empresa****************/	
    $pdf->SetFont('Arial','B',10);	
    $camp_sexo = "Nombre de la empresa:";
    $camp_sexo_value = $_POST["nombre"];
    $pdf->Cell(50, 8,$camp_sexo,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_sexo_value,1);
	$pdf->Ln();
/**************** Campo Hora por desarrolladores ****************/
    $pdf->SetFont('Arial','B',10);		
	$camp_nombre = "Horas por programador:";
    $camp_nombre_value = $_POST["horas_cadpers"];
	$pdf->Cell(50, 8,$camp_nombre,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_nombre_value,1);
	$pdf->Ln();
/**************** Campo duracion_mes ****************/	
	$pdf->SetFont('Arial','B',10);	
	$camp_web = "Duracion en meses :";        
	$camp_web_value = $_POST["duracion_mes"];
	$pdf->Cell(50, 8,$camp_web,1);
	$pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_web_value,1);
	$pdf->Ln();
/**************** Campo costo ****************/	
	$pdf->SetFont('Arial','B',10);	
	$camp_edad = "Costo Total del proyecto:";
	$camp_edad_value = $_POST["costo"];
    $pdf->Cell(50, 8,$camp_edad,1);
    $pdf->SetFont("Times");
	$pdf->Cell(140, 8,$camp_edad_value,1);
	$pdf->Ln();
	
/**************** Campo procesos ****************/	
    
/************* Footer ************************/	
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190, 20,"Constancia que se expide en Caracas, a los ___ dias del mes de Octubre  del  2015",0,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190, 30,"Planificador de TI, Venamerica",0,0, 'C');
    
    $pdf->Output();
	
	
	
	?>