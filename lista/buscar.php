<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location:index.php");
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="../assets/js/custom.js"></script>
		<body onload="nobackbutton();">
		<meta charset='UTF-8'>	
		<title>Ver Por Paginas</title>
		<link rel="stylesheet"  href="../assets/css/style.css">
		<link rel="stylesheet"  href="../barranav/estilos.ccs">
		<link rel="stylesheet"  href="../barranav/fonts.css">
		<link rel="stylesheet"  href="../assets/css/menuestilo.ccs">
	</head>
	</body>
	<body class="bien">
		<?php
			include "../barranav/barranav.php";
			/* 
				VIEW-PAGINATED.PHP
				Displays all data from 'players' table
				This is a modified version of view.php that includes pagination
			*/
			//connect to the database
			include('../conexion.php');
			//number of results to show per page
			if(isset($_POST['buscar'])){
				$per_page = 30;
				//figure out the total pages in the database
				$result = pg_query("SELECT * FROM formu WHERE nombre LIKE '%$_POST[buscar]%' OR apellido LIKE '%$_POST[buscar]%'");
				$total_results = pg_num_rows($result);
				$total_pages = ceil($total_results / $per_page);
				//check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
				if (isset($_GET['page']) && is_numeric($_GET['page'])){
					$show_page = $_GET['page'];
					//make sure the $show_page value is valid
					if ($show_page > 0 && $show_page <= $total_pages){
						$start = ($show_page -1) * $per_page;
						$end = $start + $per_page; 
					}else{
						//error - show first set of results
						$start = 0;
						$end = $per_page; 
					}		
				}else{
					//if page isn't set, show first set of results
					$start = 0;
					$end = $per_page; 
				}
				//display pagination
				for ($i = 1; $i <= $total_pages; $i++){
		?>
		<?php
				}
		?>
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
				for ($i = $start; $i < $end; $i++){
					//make sure that PHP doesn't try to show results that don't exist
					if ($i == $total_results) { 
						break;
					}
					//echo out the contents of each row into a table
		?>
			<tr>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'codigo');?></td>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'cedula');?></td>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'nombre');?></td>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'apellido');?></td>
				<?php
					if(pg_fetch_result($result, $i, 'cod_sexo')==1){
				?>
				<td align="center">Masculino</td>
				<?php
					}else{
				?>
				<td align="center">Femenino</td>
				<?php
					}
				?>
				<td><?php echo pg_fetch_result($result, $i, 'correo');?></td>
				<?php
					if(pg_fetch_result($result, $i, 'cod_area1')==1){
				?>
				<td align="center">212-<?php echo pg_fetch_result($result, $i, 'telefono1');?></td>
				<?php
					}else{
				?>
				<td align="center">239-<?php echo pg_fetch_result($result, $i, 'telefono1');?></td>
				<?php
					}
					if(pg_fetch_result($result, $i, 'cod_area2')==1){
				?>
				<td align="center">412-<?php echo pg_fetch_result($result, $i, 'telefono2');?></td>
				<?php
					}else if(pg_fetch_result($result, $i, 'cod_area2')==2){
				?>
				<td align="center">414-<?php echo pg_fetch_result($result, $i, 'telefono2');?></td>
				<?php
					}else if(pg_fetch_result($result, $i, 'cod_area2')==3){
				?>
				<td align="center">416-<?php echo pg_fetch_result($result, $i, 'telefono2');?></td>
				<?php
					}else if(pg_fetch_result($result, $i, 'cod_area2')==4){
				?>
				<td align="center">424-<?php echo pg_fetch_result($result, $i, 'telefono2');?></td>
				<?php
					}else{
				?>
				<td align="center">426-<?php echo pg_fetch_result($result, $i, 'telefono2');?></td>
				<?php
					}
				?>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'direccion');?></td>
				<?php
					if(pg_fetch_result($result, $i, 'cod_depar')==1){
				?>
				<td align="center">Administrativo</td>
				<?php
					}else if(pg_fetch_result($result, $i, 'cod_depar')==2){
				?>
				<td align="center">Directivo</td>
				<?php
					}else if(pg_fetch_result($result, $i, 'cod_depar')==3){
				?>
				<td align="center">Docente</td>
				<?php
					}else{
				?>
				<td align="center">Obrero</td>
				<?php
					}
				?>
				<td align="center"><?php echo pg_fetch_result($result, $i, 'Cargo');?></td>
				<td align="center"><a href="../consultas/modificar.php?codigo=<?php echo pg_fetch_result($result, $i, 'codigo');?>">Editar</a></td>
				<td align="center"><a href="../consultas/eliminar2.php?codigo=<?php echo pg_fetch_result($result, $i, 'codigo');?>">Eliminar</a></td>
			</tr>
		<?php 
			}
		}else{
			echo "No se encontraron resultados.";
		} 
			// close table>
		?>
		</table>
		<?php
			//pagination
		?>
	</body>
</html>