<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
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
		<body onload="nobackbutton();">
		<meta charset="utf-8"> 
		<title>registrocss</title>
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
         <div class="page-container1">
			<h1>Formulario de Registro de Trabajadores</h1>
			<h3>Los campos con <span style="color:#FA0000">*</span> son obligatorios</h3><br>
			<form action="registrar.php" method="POST" class="form1">
				<ul>
					<li><label for="codigo"><span style="color:#FA0000">*</span>C&#243;digo personal:</label><input type="text" placeholder="c&#243;digo" required name="codigo"></li><br>
					<li><label for="cedula"><span style="color:#FA0000">*</span>C&eacute;dula:</label><input type="text" placeholder="c&eacute;dula" required name="cedula" onkeypress="return solonumeros(event)" maxlength="8"></li><br>
					<li><label for="nombre"><span style="color:#FA0000">*</span>Nombres:</label><input type="text" placeholder="Nombres" required name="nombre"></li><br>
					<li><label for="apellido"><span style="color:#FA0000">*</span>Apellidos:</label><input type="text" placeholder="Apellidos" required name="apellido"></li><br><br>
					<li><label for="cod_sexo"><span style="color:#FA0000">*</span>Sexo:</label>
						<select name="cod_sexo" required>
							<option value="0">Seleccione</option>
							<option value="1">Masculino</option>
							<option value="2">Femenino</option> 
						</select>
					</li>
					<br>
					<li><label for="correo"><span style="color:#FA0000">*</span>Correo:</label><input type="email" placeholder="nombre@ejemplo.com" required name="correo"></li><br>
					<li><label for="telefono1"><span style="color:#FA0000">*</span>Tlf. Local:</label>
						<select name="cod_area1" required>
							<option value="0">Seleccione</option>
							<option value="1">212</option>
							<option value="2">239</option>
						</select>
						<input type="text" placeholder="local" required maxlength="7" name="telefono1" onkeypress="return solonumeros(event)" >
					</li>
					<br><br>
					<li><label for="telefono2"><span style="color:#FA0000">*</span>Tlf. Celular:</label>
						<select name="cod_area2" required>
							<option value="0">Seleccione</option>
							<option value="1">412</option>
							<option value="2">414</option>
							<option value="3">416</option>
							<option value="4">424</option>
							<option value="5">426</option>
						</select>
						<input type="text" placeholder="celular" required name="telefono2" onkeypress="return solonumeros(event)" maxlength="7">
					</li><br>
					<li><label for="direccion"><span style="color:#FA0000">*</span>Direccion:</label><textarea rows="5" cols="35" required name="direccion"></textarea></li><br>
					<li><label for="cod_depar"><span style="color:#FA0000">*</span>Departamento:</label>
						<select name="cod_depar" required>
							<option value="0">Seleccione</option>
							<option value="1">Administrativo</option>
							<option value="2">Directivo</option>
							<option value="3">Docente</option>
							<option value="4">Obrero</option>
						</select>
					</li><br>
					<li><label for="cargo"><span style="color:#FA0000">*</span>Cargo:</label><input type="text" placeholder="cargo" required name="cargo"></li><br>
					<li><button class="submit" type="submit">Registrar</button><button class="submit" type="reset">Cancelar</button></li><br>
				</ul>
			</form>
		</div>
  </body>
</html>