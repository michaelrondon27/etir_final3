<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <script src="js/custom.js"></script>    
        <body onload="nobackbutton();">
            <meta charset="utf-8">
            <title>inicio de sesion</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <!-- CSS -->
            <link rel="stylesheet" href="assets/css/entrada.css">
            <meta name="theme-color" content="#4285f4">
            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <script src="Jquery/jquery-1.6.3.min.js"></script>
            <script>
                $(function(){
                    $("body").hide().fadeIn(1000);
                });
            </script>
    </head>
        </body>
    <body>
        <center>
            <img src="imagenes/logoetir.jpg" id="banner">
        </center>
        <div class="contenedor-formulario">
            <div class="wrap">
                <div id="titulo1">Sistema Automatizado de la E.T.I.R. "Julio Calca&#241;o"</div>
                <br>
                <div id="titulo2">Inicio de Sesi&#243;n</div>
                <form action="validar_usuario.php" method="post" class="formulario" name="formulario">
                    <div>
                        <div class="input-group">
                            <input type="text" name="usuario" id="usuario">
                            <label class="label" for="usuario">Usuario:</label>
                        </div>
                        <div class="input-group">
                            <input type="password" name="contraseña" id="contraseña">
                            <label class="label" for="contraseña">Contrase&#241;a:</label>
                        </div>
                        <?php
                        if(isset($_GET['error'])==1){
                        ?>
                            <span style="color:#f00"><?php echo "Usuario o contraseña errada";?></span>
                            <br>
                            <br>
                        <?php
                        }
                        ?>
                        <input type="hidden" id="valor" name="valor" value="1">
                        <input type="submit" id="btn-submit" value="Ingresar">
                    </div>
                </form>
            </div>
            <br>
            <div id="pie">Ministerio del Poder Popular para la Educaci&#243;n - E.T.I.R "Julio Calca&#241;o" - AV Circunvalaci&#243;n de catia.   Rif:  Copyright 2015</div> 
        </div>
        <script src="assets/js/entrada.js"></script>
    </body>
</html>