<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>asistencia</title>
		<link rel="stylesheet" href="../assets/css/style.css">
		<script type="text/javascript">
			function startTime(){
				today=new Date();
				h=today.getHours();
				m=today.getMinutes();
				s=today.getSeconds();
				m=checkTime(m);
				s=checkTime(s);
				document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
				t=setTimeout('startTime()',500);
				}
			function checkTime(i) {
				if (i<10){
					i="0" + i;
				}
				return i;
			}
			window.onload=function(){
				startTime();
			}
		</script>	
		<style type="text/css">
			h2{
			text-align: center;
			color: #000;
			font-weight: normal;
			font-size: 30pt;
			margin: 30px 0px;
			font-family: 'Pinyon Script', cursive;
			}
			h3{
				text-align: center;
				font-weight: normal;
				font-size: 15pt;
				margin: auto;
				font-family: times;
			}
			
			.mifecha {
			   background-color: transparent;
			   margin: auto;
			   padding: 0px;
			   width: 110px;
			   text-align: center;
			   font-family: sans-serif;
			   font-size: 12pt;
			   border-radius: 10px;
			   border-style: ridge;
			}
			.mifecha .ano{
			   background-color: transparent;
			   padding: 0px;
			   font-size: 100%;
			   margin-bottom: 3px;
			   color: #000;
			   letter-spacing: 3px;
			   font-weight: bold;
			   font-family: sans-serif;
			}
			.mifecha .dia{
			   background-color: transparent;
			   font-size: 300%;
			   padding: 0px;
			   margin-bottom: 3px;
			   font-weight: bold;
			   font-family: sans-serif;
			}
			.mifecha .mes{
			   background-color: transparent;
			   font-size: 80%;
			   padding: 0px;
			   color: #000;
			   font-weight: bold;
			   font-family: sans-serif;
			}
			.reloj{
				margin: auto;
				padding: 0;
				background-color: none;
				width: 170px;
				height: 40px;
				border-radius: 10px;
				border-style: ridge;
				font-size: 35px;
				font-family: sans-serif;
				font-style: normal;
			}
			form{
				background: transparent;
				width: 400px;
				border: 0;
				margin: 100px auto;
				text-align: middle;
				vertical-align: center;
			}
			input{
				width: 200px;
				height: 35px;
				padding: 0px 10px;
				margin: auto;
				color: #000;
				text-align: center;
			}
			button.submit{
				background: #f;
				border: 1px solid #509111;
				border-radius: 5px;
				-moz-border-radius: 5px;
				box-shadow: inset 01px 0 0 #9fd574;
				color: white;
				padding: 6px 20px;
				text-align: center;
				text-shadow: 0 -1px 0 #396715;
			}
			button.submit:hover{
				opacity: .85;
				cursor: pointer;
			}
			button.submit:active{
				border: 1px solid #30911a;
				box-shadow: 0 0 10px 5px #356b0b inset;
				-moz-box-shadow: 0 0 10px 5px #356b0b inset;
			}
		</style>
	</head>
	<center>
		<img src="../imagenes/logoetir.jpg" width="80%">
	</center>
	<body class="bien">
		<center>
			<header>
				<div class="principal1"><h3>Sistema Automatizado de Entrada y Salida del Personal de la E.T.I.R. "Julio Calca&#241;o"</h3></div>
			</header>
			<form action="asistencia.php" method="POST" class="page-container">
				<h3>Ingrese su C&#243;digo Personal</h3>
				<br>
				<input type="text" maxlength="7" placeholder="C&#243;digo" name="codigo">
				<br>
				<button class="submit" type="submit">ENVIAR</button>
				<br><br>
				<script>
					var f=new Date();
					var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					document.write('<div class="mifecha">');
					document.write('<div class="ano">' + f.getFullYear() + '</div>');
					document.write('<div class="dia">' + f.getDate() + '</div>');
					document.write('<div class="mes">' + meses[f.getMonth()] + '</div>');
					document.write('</div>');
				</script> <br>
				<div id="reloj" class="reloj" ></div>
			</form>
			<footer> 
    			<div align="center" class="principal2">Ministerio del Poder Popular para la Educaci&#243;n - E.T.I.R "Julio Calca&#241;o" - AV Circunvalaci&#243;n de catia.   Rif:  Copyright 2015</div>
    		</footer>
		</center>
	</body>
</html>