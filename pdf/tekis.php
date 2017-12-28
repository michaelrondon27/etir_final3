<?php
	session_start();
	if($_SESSION['usuario'] ==""){
		header("Location: index.php");
	}
?>

<html>
<head>
<script src="botonatras.js"></script>
<style>
.bordes { border-color: blue;}
</style>
</head> 


    <body  onload="nobackbutton();" bgcolor ="ffffff" text="#0000ff">                       

<figure>
<center><img src="..//entrada/imagenes/fm.jpg"WIDTH=900 HEIGHT=90 BORDER=0 ALT="colegio" ></center>
</figure>
<figure>
<center><img src="..//entrada/imagenes/miranda.jpg"WIDTH=400 HEIGHT=90 BORDER=0 ALT="colegio" ></center>
</figure>

    <section><title>Sistema para becarios</title></section>

 
<body  bgcolor ="222222" text="#0000ff">


<center><h3>Registrar Usuario</h3></center>
<br>
<br>
<br>
</head>
</body>

<hr size="1" color="#0000ff">
<br>
<br>

<form action='../../modelo/reporte.php' method='get'>
<table align='center'> 
  <tr>
   <td> <font color="#FFFFFF"> C&eacute;dula: </font> </td>
   <td><input name="cedula" required="required"  placeholder="Número de cedula:" type="number" /></td>
  </tr>
  <tr>
   <td> <font color="#FFFFFF"> Nombre: </font> </td>
   <td><input name="nombre" required="required" placeholder="Ingrese Nrrombre:" type="text" /></td> 
  </tr>
<tr>
   <td> <font color="#FFFFFF"> Tipo de Beca: </font> </td>
   <td><input name="tipobeca" required="required"  placeholder="Tipo Beca:" type="text" /></td> 
  </tr>
<tr>
<td> <font color="#FFFFFF"> Monto: </font> </td>
   <td><input name="monto" required="required"  placeholder="Monto:" type="text" /></td> 
   </table>
<br>
<br>
<center><td colspan="2" align="center"><input name="iniciar" type="submit" value="Crear Tekisted" /></td></center>
</tr>

<br>
<br>
<center><a href="inicio.php">Inicio</a></center>
</form>


<footer id="pie">
<center>
 <p>Copyright &copy; 2015 --- Equipo de Proyecto.<br />Todos los Derechos Reservados.</p>
 </center>
</footer>
</BODY>
</html>


