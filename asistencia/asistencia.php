<?php
	date_default_timezone_set('America/caracas');
	include "../conexion.php";
	$cod=$_POST['codigo'];
	$fecha = date('d-m-Y');
	$hora = date('h:i:s a');
	if (isset($_POST['codigo']) && $_POST['codigo']!=""){
		//$cod=['codigo'];
		$sql="SELECT * FROM formu WHERE codigo='$cod'";
		$sql2="SELECT * FROM entrada WHERE codigo='$cod' AND fecha='$fecha'";
		$query=pg_query($sql) or die (pg_last_error());
		$query2=pg_query($sql2) or die (pg_last_error());
		$num=pg_num_rows($query);
		$num2=pg_num_rows($query2);
		if ($num==0){
?>
		<script> alert('¡Código inválido!')</script>
		<meta http-equiv="refresh" content="0; URL=http:asistencia1.php">
<?php
		}else{
			if($num2==0){
				$sql3="INSERT INTO entrada(codigo, fecha, entrada)VALUES('$cod', '$fecha', '$hora')";
				$query3=pg_query($sql3) or die (pg_last_error());
?>
				<script> alert('¡Registro Almacenado!')</script>
				<meta http-equiv="refresh" content="0; URL=http:asistencia1.php">
<?php
			}else{
				$sql4="SELECT * FROM salida WHERE codigo='$cod' AND fecha='$fecha'";
				$query4=$query2=pg_query($sql4) or die (pg_last_error());
				$num4=pg_fetch_array($query4);
				if($num4==0){
					$sql5="INSERT INTO salida(codigo, fecha, salida)VALUES('$cod', '$fecha', '$hora')";
					$query5=pg_query($sql5) or die (pg_last_error());
?>
					<script> alert('¡Registro Almacenado!')</script>
					<meta http-equiv="refresh" content="0; URL=http:asistencia1.php">
<?php
				}else{
?>
					<script> alert('¡UD. YA REGISTRO SU HORA DE ENTRADA Y SALIDA POR EL DIA DE HOY!')</script>
					<meta http-equiv="refresh" content="0; URL=http:asistencia1.php">
<?php
				}
			}
		}
	}else{
?>
		<script>alert('¡Debe colocar una código!')</script>
		<meta http-equiv="refresh" content="0; URL=http:asistencia1.php">
<?php
	}
?>