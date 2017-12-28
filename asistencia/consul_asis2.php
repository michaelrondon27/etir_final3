<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location:../index.php");
	}
	include "../conexion.php";
	$cod=$_GET['codigo'];
	$f1=$_GET['from'];
	$f2=$_GET['to'];
	if (isset($_GET['codigo']) && $_GET['codigo']!=""){
		$cod=$_GET['codigo'];
		$sql2="SELECT * FROM formu WHERE codigo='$cod'";
		$sql="SELECT * FROM entrada WHERE codigo='$cod' AND fecha BETWEEN '$f1' AND '$f2'";
		$sql3="SELECT * FROM salida WHERE codigo='$cod' AND fecha BETWEEN '$f1' AND '$f2'";
		//echo $sql;
		$query2=pg_query($sql2) or die (pg_last_error());
		$query=pg_query($sql) or die (pg_last_error());
		$query3=pg_query($sql3) or die (pg_last_error());
		$row2=pg_fetch_array($query2);
		$num2=pg_num_rows($query2);
		if($num2==0){
?>
		<script>alert('¡Este código no existe!')</script>
		<meta http-equiv="refresh" content="0; URL=http:consul_asis1.php">
<?php
		}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script type="text/javascript">
			function imprSelec(muestra){
				var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
			}
		</script>
		<title>Asistencia Consultada</title>
		<meta charset="utf-8">
		<script src="../assets/js/custom.js"></script>
		<body onload="nobackbutton();">
		<meta charset='UTF-8'>
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
			<a class="page-container" href="javascript:imprSelec('muestra')">Imprimir</a>
			<br>
			<br>
			<br>
		</center>
		<center>
			<div id="muestra">
				<table cellpadding='20' rules='rows' class='page-container1'>
					<tr>
						<th>Código: <?php echo $row2['codigo'];?></th>
						<th>Cédula: <?php echo $row2['cedula'];?></th>
						<th>Nombres: <?php echo $row2['nombre'];?></th>
						<th>Apellidos: <?php echo $row2['apellido'];?></th>
					</tr>
					<tr> 
						<th>Fecha</th> 
						<th>Entrada</th>
						<th>Salida</th>
					</tr>
					<?php
						while($row=pg_fetch_array($query)){
					?>		
					<tr>
						<td align="center"><?php echo $row['fecha'];?></td>
						<td align="center"><?php echo $row['entrada'];?></td>
					<?php
						}
						while($row3=pg_fetch_array($query3)){
					?>
						<td align="center"><?php echo $row['entrada'];?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</center>
	</body>
<?php
	}else{
?>
	<script>alert('¡Debe colocar una código!')</script>
	<meta http-equiv="refresh" content="0; URL=http:consul_asis1.php">
<?php
	}
?>
</html>