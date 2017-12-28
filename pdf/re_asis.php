<?php
	include "../conexion.php";
	function reportePdfUsuarios(){
		$cod=$_GET['codigo'];
		$f1=$_GET['from'];
		$f2=$_GET['to'];
		$html="";
		$sql="SELECT * FROM asistencia WHERE codigo='$cod' AND fecha BETWEEN '$f1' AND '$f2'";
		$sql2="SELECT * FROM formu WHERE codigo='$cod'";
		$rs=pg_query($sql) or die (pg_last_error());
		$rs2=pg_query($sql2) or die (pg_last_error());
		$row2=pg_fetch_array($rs2);
		$i=0;
		$html=$html.'<div align="center">
		Reporte de Asistencia.
		<br /><br />			
		<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';	
		$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">C&oacute;digo</font></td><td><font color="#FFFFFF">C&eacute;dula:</font></td><td><font color="#FFFFFF">Nombres</font></td><td><font color="#FFFFFF">Apellidos</font></td></tr>';
		$html = $html.'<td>';
		$html = $html. $row2["codigo"];
		$html = $html.'</td><td>';
		$html = $html.'<td>';
		$html = $html. $row2['cedula'];
		$html = $html.'</td><td>';
		$html = $html. $row2["nombre"];
		$html = $html.'</td><td>';
		$html = $html. $row2["apellido"];
		$html = $html.'</td></tr>';
		$html = $html.'<tr bgcolor"#FF0000"><td></td><td><font color="#FFFFFF">Fecha</font></td><td><font color="#FFFFFF">Hora</font></td><td></td></tr>';
		while ($row = pg_fetch_array($rs)){
			if($i%2==0){
				$html=  $html.'<tr bgcolor="#95B1CE">';
			}else{
				$html=$html.'<tr>';
			}
			$html = $html.'<td>';
			$html = $html.'</td><td>';
			$html = $html.'<td>';
			$html = $html. $row["fecha"];
			$html = $html.'</td><td>';
			$html = $html. $row["hora"];
			$html = $html.'</td><td>';
			$html = $html.'</td></tr>';		
			$i++;
			}			
		$html=$html.'</table></div>';			
		return ($html);
	}
?>