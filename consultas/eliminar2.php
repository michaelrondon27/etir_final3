<?php
	echo "<script> alert('¿Seguro que quiere eliminar este registro?')</scrip>";
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location:../index.php");
	}
	include "../conexion.php";
	$cod=$_GET['codigo'];
	$sql= "DELETE FROM asistencia WHERE codigo='$cod'";
	$sql2= "DELETE FROM entrada WHERE codigo='$cod'";
	$sql3= "DELETE FROM sailda WHERE codigo='$cod'";
	$query = pg_query($sql) or die ("Error al eliminar: ".pg_last_error());
	$query2 = pg_query($sql2) or die ("Error al eliminar: ".pg_last_error());
	$query3 = pg_query($sql3) or die ("Error al eliminar: ".pg_last_error());
		if ($query && $query2 && $query3){
?>
			<script> alert('¡LOS DATOS SE ELIMINARON CON EXITO!')</script>
			<meta http-equiv="refresh" content="0; URL=http:../lista/viewpaginated.php">
<?php
		}else{
?>
			<script> alert('¡Error al eliminar!')</script>
			<meta http-equiv="refresh" content="0; URL=http:../lista/viewpaginated.php">
<?php
	}
?>