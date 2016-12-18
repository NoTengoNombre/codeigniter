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
//    inicio la session
    session_start();
//    Comprueba que el usuario esta autentificado
    if ($_SESSION['autentificado'] != "si") {
//      Si no existe , envio a la pagina de autentificacion
      header("Location: index.php");
//      ademas salgo de este script
      exit();
    }
    ?>
  </body>
</html>
