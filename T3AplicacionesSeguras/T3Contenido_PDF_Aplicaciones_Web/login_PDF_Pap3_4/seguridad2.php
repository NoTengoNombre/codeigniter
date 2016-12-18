<!--
    @Created on : 18-dic-2016, 23:29:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        : 5 A
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
    <h1>Capa de Seguridad</h1>
    <?php
//    Iniciamos la session
    session_name("loginUsuario");
//    Inicio la session
    session_start();
//    Antes de hacer los calculos , compruebo que el usuario esta logueado
//    utilizamos el mismo script que antes
    if ($_SESSION['autentificado'] != "si") {
//      Si no existe , envio a la pagina de autentificacion
      header("Location: index.php");
    } else {
//      Sino , calculamos el tiempo transcurrido
      $fechaGuardada = $_SESSION["ultimoAcceso"];
      $ahora = date("Y-n-j H:i:s");
      $tiempo_transcurrido = (strtotime($ahora) - strtotime($fechaGuardada));
//    comparamos el tiempo transcurrido
      if ($tiempo_transcurrido >= 600) {
//        si pasaron 10 minutos o mas 
        session_destroy(); // destruyo la session
        header("Location: index.php"); // envio al usuario a la pag de autentificion
//        sino , actualizo la fecha de la session
      } else {
        $_SESSION["ultimoAcceso"] = $ahora;
      }
    }
    ?>
  </body>
</html>
