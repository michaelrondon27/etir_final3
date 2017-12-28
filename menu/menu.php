<?php
	session_start();
	if(!isset($_SESSION['k_username'])){
		//echo $_SESSION['k_username'];
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="../assets/js/custom.js"></script>
		<body onload="nobackbutton();">
		<meta charset='UTF-8'>
		<title>menu_principal</title>
	    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
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
		<center>
			<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:autopx;margin:-90px 0px 0px 0px;">
	        	<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
	            	<ul class="amazingslider-slides" style="display:none;">
		                <li><img src="images2/1.jpg" alt="RECREACION"/></li>
	    	            <li><img src="images2/2.jpg" alt="EVENTO"/></li>
	        	        <li><img src="images2/3.jpg" alt="INSTITUCION"/></li>
	            	    <li><img src="images2/is_25621.jpg" alt="ALUMNOS"/></li>
		            </ul>
	    	        <ul class="amazingslider-thumbnails" style="display:none;">
	        	        <li><img src="images2/1-tn.jpg" alt="RECREACI&#211;N" /></li>
	            	    <li><img src="images2/2-tn.jpg" alt="EVENTO" /></li>
	                	<li><img src="images2/3-tn.jpg" alt="INSTITUCI&#211;N" /></li>
		                <li><img src="images2/is_25621-tn.jpg" alt="ALUMNOS" /></li>
	    	        </ul>
	    	    </div>
	   		</div>
		</center>	          
		<script src="sliderengine/jquery.js"></script>
	    <script src="sliderengine/amazingslider.js"></script>
	    <script src="sliderengine/initslider-1.js"></script>
	</body>
</html>


