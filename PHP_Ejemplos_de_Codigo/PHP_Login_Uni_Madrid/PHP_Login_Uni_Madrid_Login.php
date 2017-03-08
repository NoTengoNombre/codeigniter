<!--
    @Created on : 21-dic-2016, 9:22:30
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
    if (isset($_SESSION["login"])) { // saber si una session esta iniciada
      echo "<h1>Bienvenido " . $_SESSION["nombreusuario"] . "</h1>";
      echo "<p>Use el men&uacute; de la izquierda para navegar .</p>";
    } else {
      echo "<h1>Error</h1>";
      echo "<p> El usuario o contrase&ntilde;a no son v&aacute;lidos.</p>";
    }
    ?>
  </body>
</html>
