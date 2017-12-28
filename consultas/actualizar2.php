<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
	include "../conexion.php";
	$cod=$_GET['codigo'];
	$ced=$_GET['cedula'];
	$n=$_GET['nombre'];
	$a=$_GET['apellido'];
	$s=$_GET['cod_sexo'];
	$cor=$_GET['correo'];
	$ar1=$_GET['cod_area1'];
	$t1=$_GET['telefono1'];
	$ar2=$_GET['cod_area2'];
	$t2=$_GET['telefono2'];
	$dir=$_GET['direccion'];
	$depar=$_GET['cod_depar'];
	$car=$_GET['cargo'];
	$sql2= "UPDATE formu SET cedula=$ced, nombre='$n', apellido='$a', cod_sexo=$s, correo='$cor', cod_area1=$ar1, telefono1='$t1', cod_area2=$ar2, telefono2='$t2', direccion='$dir', cod_depar=$depar, cargo='$car' WHERE codigo='$cod'";
	$query = pg_query($sql2) or die ("Error al modificar: ".pg_last_error());
		if ($sql2){
?>
			<script> alert('¡LOS DATOS SE MODIFICARON CON EXITO!')</script>
			<meta http-equiv="refresh" content="0; URL=http:../lista/viewpaginated.php">
<?php
		}else{
?>
			<script> alert('¡Error al modificar!')</script>
			<meta http-equiv="refresh" content="0; URL=http:modificar.php">
<?php
		}
?>