<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
	include '../conexion.php';
	$cod=$_POST['codigo'];
	$ced=$_POST['cedula'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$s=$_POST['cod_sexo'];
	$cor=$_POST['correo'];
	$ar1=$_POST['cod_area1'];
	$t1=$_POST['telefono1'];
	$ar2=$_POST['cod_area2'];
	$t2=$_POST['telefono2'];
	$dir=$_POST['direccion'];
	$depar=$_POST['cod_depar'];
	$car=$_POST['cargo'];
		$sql="SELECT * FROM formu WHERE codigo='$cod'";
		$sql2="SELECT * FROM formu WHERE cedula=$ced";
		$res=pg_query($sql) or die ("ERROR AL REGISTRAR".pg_last_error());
		$res2=pg_query($sql2) or die ("ERROR AL REGISTRAR".pg_last_error());
		$rows=pg_num_rows($res);
		$rows2=pg_num_rows($res2);
			if ($rows==0 && $rows2==0){
				$registrar="INSERT INTO formu (codigo, cedula, nombre, apellido, cod_sexo, correo, cod_area1, telefono1, cod_area2, telefono2, direccion, cod_depar, cargo) VALUES('$cod', $ced, '$n', '$a', $s, '$cor', $ar1, '$t1', $ar2, '$t2', '$dir', $depar, '$car')";
				$resultado=pg_query($registrar) or die (pg_cancel_query());
?>
				<script> alert('¡LOS DATOS SE REGISTRARON CON EXITO!')</script>
				<meta http-equiv="refresh" content="0; URL=http:../lista/viewpaginated.php">
<?php
			}else if($rows==1){
?>
				<script> alert('¡YA HAY UN EMPLEADO REGISTRADO CON ESTE CÓDIGO!')</script>
				<meta http-equiv="refresh" content="0; URL=http:registrocss.php">
<?php
			}else if($rows2==1){
?>
				<script> alert('¡YA HAY UN EMPLEADO REGISTRADO CON ESTA CÉDULA!')</script>
				<meta http-equiv="refresh" content="0; URL=http:registrocss.php">
			}
?>