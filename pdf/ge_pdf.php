<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location:../index.php");
	}
	error_reporting(E_ERROR);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Consultar Asistencia</title>
		<link rel="stylesheet" href="../assets/css/jquery-ui.css">
  		<script src="../assets/js/jquery-1.10.2.js"></script>
  		<script src="../assets/js/jquery-ui.js"></script>
		<meta charset="utf-8">
		<script>
		   	$.datepicker.regional['es'] = {
				closeText: 'Cerrar',
				prevText: '<Ant',
				nextText: 'Sig>',
				currentText: 'Hoy',
				monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				weekHeader: 'Sm',
				dateFormat: 'yy-mm-dd',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			$.datepicker.setDefaults($.datepicker.regional['es']);
			$(function() {
			    $( "#from" ).datepicker({
    				defaultDate: "+1w",
    				changeMonth: true,
    				numberOfMonths: 1,
    					onClose: function( selectedDate ) {
        					$( "#to" ).datepicker( "option", "minDate", selectedDate );
    					}
    			});
    			$( "#to" ).datepicker({
    				defaultDate: "+1w",
    				changeMonth: true,
    				numberOfMonths: 1,
    					onClose: function( selectedDate ) {
        					$( "#from" ).datepicker( "option", "maxDate", selectedDate );
    					}
    			});
			});
  		</script>
  		<script src="../assets/js/custom.js"></script>
		<body onload="nobackbutton();">
		<meta charset='UTF-8'>
		<link rel="stylesheet"  href="../menu/estilos.ccs">
		<link rel="stylesheet"  href="../menu/fonts.css">
		<link rel="stylesheet"  href="../assets/css/menuestilo.ccs">
		<link rel="stylesheet"  href="../assets/css/style.css">	
	</head>
	</body>
	<body background="../imagenes/fondobanner.jpg">
		<center>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="758" height="100" id="bannerp" align="middle"></object>
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="movie" value="../imagenes/bannerp.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="../imagenes/bannerp.swf" quality="high" bgcolor="#ffffff" width="1400" height="100" name="bannerp" align="right" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</center>
		<header>
			<nav>
				<ul>
					<li><a href="../menu/menu.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a>
						<ul>
							<li><a href="http://juliocalano32.blogspot.com/" target="v1" >Historia</a></li>
							<li><a href="https://es-la.facebook.com/pages/ETIR-Julio-Calca%C3%B1o/278932634080" target="v2">Misi&#243;n</a></li>
							<li><a href="https://www.google.co.ve/maps/place/Escuela+T%C3%A9cnica+Industrial+Julio+Calca%C3%B1o/@10.511081,-66.9543874,820m/data=!3m2!1e3!4b1!4m2!3m1!1s0x8c2a5e577e45a3af:0x938110e710c2c950!6m1!1e1" target="v3">Ubicaci&#243;n</a></li>
						</ul>
					</li>
					<li>
						<a href="consul_asis1.php"><span class="segundo"><i class="icon icon-stats-dots"></i></span>Consulta de Asistencia</a>
					</li>
					<li>
						<a href="../viewpaginated.php"><span class="tercero"><i class="icon icon-profile"></i></span>Registros</a>
					</li>
					<li>
						<a ><span class="quinto"><i class="icon icon-search"></i></span>Solicitudes</a>
						<ul> 
							<li><a href="http://constancia_trabajo.me.gob.ve/" target="v5">Constancias de trabajo</a></li>
							<li><a href="../pdf/reporte.php" target="v7">Solicitud De Permiso</a></li>
							<li><a href="http://www.me.gob.ve/servicios/recibo/consultacopia.php/" target="v6">Comprobante De Pago</a></li>
						</ul>
					</li>
					<li>
						<a ><span class="sexto"><i class="icon icon-cog"></i></span>Ajustes</a>
						<ul>
							<li><a href="../manual/MANUAL DE USUARIO.pdf" target="v6">Manual de usuario</a></li>
							<li><a href="../nosotros/nosotros.php">Cont&#225;ctanos</a></li>
						</ul>
					</li>
					<li>
						<a href="../cerrarsesion.php"><span class=""><i class="icon icon-switch"></i></span>Cerrar Sesi&#243;n</a>
					</li>
				</ul>
			</nav>
		</header>
	</body>
	<body>
		<center>
			<form action="re_asis.php" method="get" class="page-container2">
				<div>Coloque El C&#243;digo personal a consultar.</div>
				<br>
				<div><b>C&#243;digo: </b>
					<input type="text" maxlength="7" required placeholder="etir000" name="codigo">&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Fecha Inicial: </b>
					<input type="text" id="from" name="from">
					<b>Fecha Final: </b>
					<input type="text" id="to" name="to">
					<button type="submit">Generar PDF</button>
				</div>
				<br>
			</form>
		</center>
	</body>
</html>