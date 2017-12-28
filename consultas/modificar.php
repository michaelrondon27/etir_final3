<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
	error_reporting(E_ERROR);
	$cod=$_GET['codigo'];
	include "../conexion.php";
	if(isset($_GET['codigo']) && $_GET['codigo']!=""){
		$cod=$_GET['codigo'];
		include"../conexion.php";
		$sql="SELECT * FROM formu WHERE codigo='$cod'";
		$query=pg_query($sql) or die ("Consulta errónea: ".pg_last_error());
		$row=pg_fetch_array($query);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<body onload="nobackbutton();">
		<title>Modificar</title>
		<meta charset="utf-8">
		<script>//script para que los campos cedula, telefono1 y telefono2 agarren solo numeros
			function solonumeros(e){
				key=e.keyCode || e.which;
				teclado=String.fromCharCode(key);
				numeros="0123456789";
				especiales="8-37-38-46";//los numeros de esta linea son especiales y es para las flechas
				teclado_escpecial=false;
				for(var i in especiales){
					if (key==especiales[i]) {
						teclado_escpecial=true;
					}
				}
				if (numeros.indexOf(teclado)==-1 && !teclado_escpecial) {
					return false;
				}
			}
		</script>
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet"  href="../barranav/estilos.ccs">
		<link rel="stylesheet"  href="../barranav/fonts.css">
		<link rel="stylesheet"  href="../assets/css/menuestilo.ccs">
	</head>
	</body>
	<body class="bien">
		<?php
			include "../barranav/barranav.php";
		?>

		<center class="page-container1">
			<div><h3>Actualizaci&#243;n de datos.</h3></div>
			<br>
			<form method="get" action="actualizar2.php" class="form1">
				<div><b>C&#243;digo personal: </b>&nbsp;&nbsp;<input type="text" maxlength="7" name="codigo" value=<?php echo $row['codigo']?>></div>
				<br>
				<div><b>C&#233;dula: </b>&nbsp;&nbsp;<input type="text" name="cedula" onkeypress="return solonumeros(event)" maxlength="8" value=<?php echo $row['cedula']?>></div>
				<br>
				<div><b>Nombres: </b>&nbsp;&nbsp;<input type="text"  name="nombre" value=<?php echo $row['nombre']?>></div>
				<br>
				<div><b>Apellidos: </b>&nbsp;&nbsp;<input type="text" name="apellido" value=<?php echo $row['apellido']?>></div>
				<br>
				<div><b>Sexo: </b>&nbsp;&nbsp;
					<select name="cod_sexo">
					<?php
						if($row['cod_sexo']==1){
					?>
						<option selected value="1">Masculino</option>
						<option value="2">Femenino</option>
					<?php
						}else{
					?>
						<option selected value="2">Femenino</option>
						<option value="1">Masculino</option>
					<?php
						}
					?>
					</select>
				</div>
				<br>
				<div><b>Correo: </b>&nbsp;&nbsp;<input type="email" name="correo" value=<?php echo $row['correo']?>></div>
				<br>
				<div><b>Tlf. Local: </b>&nbsp;&nbsp;
					<select name="cod_area1">
					<?php
						if($row['cod_area1']==1){
					?>
						<option selected value="1">212</option>
						<option value="2">239</option>
					<?php
						}else{
					?>
						<option selected value="2">239</option>
						<option value="1">212</option>
					<?php
						}
					?>
					</select>
					<input type="text" name="telefono1" onkeypress="return solonumeros(event)" maxlength="7" value=<?php echo $row['telefono1']?>></div>
				<br>
				<div><b>Tlf. Celular: </b>&nbsp;&nbsp;
					<select name="cod_area2">
					<?php
						if($row['cod_area2']==1){
					?>
						<option selected value="1">412</option>
						<option value="2">414</option>
						<option value="3">416</option>
						<option value="4">424</option>
						<option value="5">426</option>
					<?php
						}else if($row['cod_area2']==2){
					?>
						<option selected value="2">414</option>
						<option value="1">412</option>
						<option value="3">416</option>
						<option value="4">424</option>
						<option value="5">426</option>
					<?php
						}else if($row['cod_area2']==3){
					?>
						<option selected value="3">416</option>
						<option value="1">412</option>
						<option value="2">414</option>
						<option value="4">424</option>
						<option value="5">426</option>
					<?php
						}else if($row['cod_area2']==4){
					?>
						<option selected value="4">424</option>
						<option value="1">412</option>
						<option value="2">414</option>
						<option value="3">416</option>
						<option value="5">426</option>
					<?php
						}else{
					?>
						<option selected value="5">426</option>
						<option value="1">412</option>
						<option value="2">414</option>
						<option value="3">416</option>
						<option value="4">424</option>
					<?php
						}
					?>
					</select>
					<input type="text" name="telefono2" onkeypress="return solonumeros(event)" maxlength="7" value=<?php echo $row['telefono2']?>></div>
				<br>
				<div><b>Direcci&#243;n: </b>&nbsp;&nbsp;<textarea rows="5" cols="35" name="direccion"><?php echo $row['direccion']?></textarea></div>
				<br><br>
				<div><b>Departamento: </b>&nbsp;&nbsp;
					<select name="cod_depar">
					<?php
						if($row['cod_depar']==1){
					?>
						<option selected value="1">Administrativo</option>
						<option value="2">Directivo</option>
						<option value="3">Docente</option>
						<option value="4">Obrero</option>
					<?php
						}else if($row['cod_depar']==2){
					?>
						<option selected value="2">Directivo</option>
						<option value="1">Administrativo</option>
						<option value="3">Docente</option>
						<option value="4">Obrero</option>
					<?php
						}else if($row['cod_depar']==3){
					?>
						<option selected value="3">Docente</option>
						<option value="1">Administrativo</option>
						<option value="2">Directivo</option>
						<option value="4">Obrero</option>
					<?php
						}else{
					?>
						<option selected value="4">Obrero</option>
						<option value="1">Administrativo</option>
						<option value="2">Directivo</option>
						<option value="3">Docente</option>
					<?php
						}
					?>
					</select>
				</div>
				<br>
				<div><b>Cargo: </b>&nbsp;&nbsp;<input type="text" name="cargo" value=<?php echo $row['cargo']?>></div>
				<br>
				<div><button type="submit" class="submit">Modificar</button></div>
			</form>
		</center>
	</body>
</html>