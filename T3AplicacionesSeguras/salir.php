<!--
    @Created on : 13-dic-2016, 23:30:57
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Has salido!</title>
  </head>
  <?php
  echo "hello friend";
  ?>
  <body>
    <h1>Autentificacion PHP</h1>
    <h1 style="background-color: #f00"> GRACIAS POR SU VISITA </h1>
    <br>
    <br>
    <a href="index.php">Formulario de autentificacion</a>
    <br>

  </body>
</html>
