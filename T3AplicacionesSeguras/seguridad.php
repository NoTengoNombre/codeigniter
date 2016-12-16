<!--
    @Created on : 13-dic-2016, 23:45:18
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
    <?php
    session_start();
//    comprueba el usuario autenticado
    if ($_SESSION["autenticado"] != "si") {
//      si no existe envio a la pagina de autenticacion
      header("Location: index.php");
//      exit();
    } else {
//      sino , calculamos el tiempo transcurrido
      $fechaGuardada = $_SESSION['ultimoAcceso'];
      $ahora = date("Y-n-j H:i:s");
      $tiempo_transcurrido = (strtotime($ahora) - strtotime($fechaGuardada));

//      comparamos el tiempo transcurrido
      if ($tiempo_transcurrido >= 600) {
//        si pasaron 10 minutos o mas 
        session_destroy();
        header("Location: index.php");
      } else {
        $_SESSION['ultimoAcceso'] = $ahora;
      }
    }
    ?>
  </body>
</html>
