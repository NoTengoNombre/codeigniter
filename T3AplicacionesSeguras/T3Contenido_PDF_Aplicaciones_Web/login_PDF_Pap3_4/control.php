<!--
    @Created on : 13-dic-2016, 23:30:57
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Autentificacion PHP - Archivo Control</h1>
    <?php
//    ini_set("session.use_only_cookies", "1");
//    ini_set("session.use_trans_sid", "0");
// Comprueba si la contraseña y el usuario es valido
    if ($_GET["usuario"] == 'asd' && $_GET["contrasenia"] == 'asd') {
//      usuario y contraseña validos
//      session_name("loginUsuario");
//      asigno un nombre a la sesion para poder guardar diferentes datos 
      session_start();
      $_SESSION["autentificado"] = "si";
//      defino la sesion que muestra que el usuario esta autorizado
//      $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
      header("Location: aplicacion.php"); // Redirijo a la aplicacion
    } else {
//      Si no existe le mando otra vez a la portada
      header("Location: index.php?errorusuario=si");
    }
    ?>
  </body>
</html>
