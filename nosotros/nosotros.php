<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contactanos</title>
		<meta charset="utf-8">
		<link rel="stylesheet"  href="estilos.ccs">
		<link rel="stylesheet"  href="fonts.css">
		<script src="sliderengine/jquery.js"></script>
    	<script src="sliderengine/amazingslider.js"></script>
    	<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    	<script src="sliderengine/initslider-1.js"></script>
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet"  href="../barranav/estilos.ccs">
		<link rel="stylesheet"  href="../barranav/fonts.css">
		<link rel="stylesheet"  href="../assets/css/menuestilo.ccs">
	</head>
	<body class="bien">
		<?php
			include "../barranav/barranav.php";
		?>
		<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:600px;margin:-50px auto 97px;">

	        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
    	        <ul class="amazingslider-slides" style="display:none;">
        	    	<li><img src="images/988518_10206541261988903_4642911749657524305_n.jpg" alt="Jorbeth Cordoba 0426-1988410" />
            	    </li>
	                <li><img src="images/IMG-20150220-WA0009.jpg" alt="BrandonVelasquez 0424-1874426" />
    	            </li>
        	        <li><img src="images/1002883_3325008181619_565276228_n.jpg" alt="Yoismer Perez 0412-3880512" />
            	    </li>
	                <li><img src="images/1379624_10201874148631839_558133260_n.jpg" alt="Michael Rondon 0424-1781403" />
    	            </li>
        	        <li><img src="images/11202856_10207685833290271_5623026003343982079_n.jpg" alt="Anderson Aular 0412-5797138" />
            	    </li>
	                <li><img src="images/descarga.png" alt="teamhack@hotmail.com" />
    	            </li>
        	    </ul>
        	    <ul class="amazingslider-thumbnails" style="display:none;">
            	    <li><img src="images/988518_10206541261988903_4642911749657524305_n-tn.jpg" alt="Jorbeth Cordoba 0426-1988410" /></li>
	                <li><img src="images/IMG-20150220-WA0009-tn.jpg" alt="BrandonVelasquez 0424-1874426" /></li>
    	            <li><img src="images/1002883_3325008181619_565276228_n-tn.jpg" alt="Yoismer Perez 0412-3880512" /></li>
        	        <li><img src="images/1379624_10201874148631839_558133260_n-tn.jpg" alt="Michael Rondon 0424-1781403" /></li>
            	    <li><img src="images/11202856_10207685833290271_5623026003343982079_n-tn.jpg" alt="Anderson Aular 0412-5797138" /></li>
	                <li><img src="images/descarga-tn.png" alt="teamhack@hotmail.com" /></li>
    	        </ul>
    	    </div>
  		</div>
    	<footer id="pie" style="margin:128px">
			<center>
 				<p class="principal">Copyright &copy; 2015 --- Equipo de Proyecto.<br> Todos los Derechos Reservados.</p>
 			</center>
		</footer>
	</body>
</html>