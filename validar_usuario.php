<?php
  //AQUI CONECTAMOS A LA BASE DE DATOS DE POSTGRES
  $conex = "host=localhost port=5432 dbname=db_etir user=postgres password=123456";
  $cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
  //sesion activa enviada a el servidor http
  session_start();
  function quitar($mensaje){
    $nopermitidos = array("'",'\\','<','>',"\"");
    $mensaje = str_replace($nopermitidos, "", $mensaje);
    return $mensaje;
  }
  if(trim($_POST["usuario"]) != "" && trim($_POST["contraseña"]) != ""){
    //Validacion de susuario y password en la base de datos
    $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
    $password = $_POST["contraseña"];
    $password=md5($password);
    $result = pg_query('SELECT contraseña, usuario FROM login_admin WHERE usuario=\''.$usuario.'\'');
    if($row = pg_fetch_array($result)){
      if($row["contraseña"] == $password){
        $_SESSION['k_username'] = $row['usuario'];
        echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
        header('Location:menu/menu.php');
      }else{
        //echo 'Password o usuario incorrecto';
        echo "<meta http-equiv='refresh' content='0;url=index.php?error=1'>";
      }
    }else{
      //echo 'Password o usuario incorrecto';
      echo "<meta http-equiv='refresh' content='0;url=index.php?error=1'>";
    }
    pg_free_result($result);
  }else{
    //echo 'Debe especificar un usuario y password';
    echo "<meta http-equiv='refresh' content='0;url=index.php?error=1'>";
  }
  pg_close();
?>