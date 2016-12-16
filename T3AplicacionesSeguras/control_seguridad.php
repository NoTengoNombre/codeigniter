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

    session_name("loginUsuario");
    session_start();
    session_set_cookie_params(0, "/", $HTTP_SERVER_VARS['HTTP_HOST'], 0);
    if ($_SESSION["autenticado"] != "si") {
//      si no esta logueado lo envio a la pagina de autenticacion
      header("Location: index.php");
    } else {
//      Calcular el tiempo transcurrido
      $fechaGuardada = $_SESSION['ultimoAcceso'];
      $ahora = date("Y-n-j H:i:s");
      $tiempo_transcurrido = (strtotime($ahora) - strtotime($fechaGuardada));

//      comparamos el tiempo transcurrido
      if ($tiempo_transcurrido >= 600) {
//        si pasaron 10 minutos
        session_destroy();
        header("Location: index.php");
      } else {
        $_SESSION["ultimoAcceso"] = $ahora;
      }
    }
    ?>
  </body>
</html>
