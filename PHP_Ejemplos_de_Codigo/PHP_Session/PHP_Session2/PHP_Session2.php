<!--
    @Created on : 21-dic-2016, 0:12:35
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

    $_SESSION["nombre"] = "Juan";

    print "<p> Se ha guardado tu nombre </b>";
    ?>
  </body>
</html>
