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
    <h1>Autentificacion PHP</h1>
    <?php
    ini_set("session.use_only_cookies", "1");
    ini_set("session.use_trans_sid", "0");

    if ($_POST["usuario"] == 'asd' && $_POST['contrasenia'] == '123') {
//      usuario y contraseña validos
      session_name("loginUsuario");
//      asigno un nombre a la sesion para poder guardar diferentes datos 
      session_start();
      $_SESSION["autentificado"] = "si";
//      defino la sesion que muestra que el usuario esta autorizado
      $_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");
      header("Location: aplicacion.php");
    } else {
      header("Location: index.php?errorusuario=si");
    }
    ?>
  </body>
</html>
