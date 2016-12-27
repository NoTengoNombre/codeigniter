<!--
    @Created on : 21-dic-2016, 1:13:02
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
//<!--//    Saber si una session esta activa-->
    if (isset($_SESSION["login"])) {
//      Al acabar la session (logout) se eliminaran todas las variables de session
//      1º Se produce al hacer
      session_destroy();
//      2º Se puede hacer tb -> unset($_SESSION); util para reiniciar la session
    }
    ?>
  </body>
</html>
