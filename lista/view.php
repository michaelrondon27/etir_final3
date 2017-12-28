<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="assets/js/custom.js"></script>
		<body onload="nobackbutton();">
		<title>Lista Completa</title>
		<link rel="stylesheet"  href="../assets/css/style.css">
		<link rel="stylesheet"  href="../barranav/estilos.ccs">
		<link rel="stylesheet"  href="../barranav/fonts.css">
		<link rel="stylesheet"  href="../assets/css/menuestilo.ccs">
	</head>
	</body>
	<body class="bien">
		<?php
			include "../barranav/barranav.php";
		?>
	</body>
	<body>
		<center>
			<?php
				/*VIEW.PHP
				Displays all data from 'players' table*/
				//connect to the database
				include('../conexion.php');
				//get results from database
				$result = pg_query("SELECT * FROM formu ORDER BY id") 
				or die(pg_last_error());  		
				//display data in table
			?>
			<p class='page-container'><b>Ver Lista Completa</b> | <a href='viewpaginated.php?page=1'>Ver Por Páginas</a></p>
			<br>
			<table rules='rows' class='vp'>
				<tr>
					<th>Código</th>
					<th>Cédula</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Sexo</th>
					<th>Correo</th>
					<th>Tlf. Local</th>
					<th>Tlf. Celular</th>
					<th>Dirección</th>
					<th>Departamento</th>
					<th>Cargo</th>
					<th></th>
					<th></th>
				</tr>
			<?php	
				//loop through results of database query, displaying them in the table
				while($row = pg_fetch_array( $result )) {
				//echo out the contents of each row into a table
			?>
				<tr>
					<td align="center"><?php echo $row['codigo'];?></td>
					<td align="center"><?php echo $row['cedula'];?></td>
					<td align="center"><?php echo $row['nombre'];?></td>
					<td align="center"><?php echo $row['apellido'];?></td>
				<?php
					if($row['cod_sexo']==1){
				?>
					<td align="center">Masculino</td>
				<?php
					}else{
				?>
					<td align="center">Femenino</td>
				<?php
					}
				?>
					<td align="center"><?php echo $row['correo'];?></td>
				<?php
					if($row['cod_area1']==1){
				?>
					<td align="center">212-<?php echo $row['telefono1'];?></td>
				<?php
					}else{
				?>
					<td align="center">239-<?php echo $row['telefono1'];?></td>
				<?php
					}
					if($row['cod_area2']==1){
				?>
					<td align="center">412-<?php echo $row['telefono2'];?></td>
				<?php
					}else if($row['cod_area2']==2){
				?>
					<td align="center">414-<?php echo $row['telefono2'];?></td>
				<?php
					}else if($row['cod_area2']==3){
				?>
					<td align="center">416-<?php echo $row['telefono2'];?></td>
				<?php
					}else if($row['cod_area2']==4){
				?>
					<td align="center">424-<?php echo $row['telefono2'];?></td>
				<?php
					}else{
				?>
					<td align="center">426-<?php echo $row['telefono2'];?></td>
				<?php
					}
				?>
					<td align="center"><?php echo $row['direccion'];?></td>
				<?php
					if($row['cod_depar']==1){
				?>
					<td align="center">Administrativo</td>
				<?php
					}else if($row['cod_depar']==2){
				?>
					<td align="center">Directivo</td>
				<?php
					}else if($row['cod_depar']==3){
				?>
					<td align="center">Docente</td>
				<?php
					}else{
				?>
					<td align="center">Obrero</td>
				<?php
					}
				?>
					<td align="center"><?php echo $row['cargo'];?></td>
					<td><a href="../consultas/modificar.php?codigo=<?php echo $row['codigo']?>">Editar</a></td>
					<td><a href="../consultas/eliminar2.php?codigo=<?php echo $row['codigo'];?>">Eliminar</a></td>
				</tr>
			<?php 
				} 
			?>
			</table>
			<br>
			<p class="page-container"><a href="../registro/registrocss.php">Agregar Nuevo Registro</a></p>
		</center>
	</body>
</html>	