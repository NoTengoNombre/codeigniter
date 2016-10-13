<!DOCTYPE html>
<!--
    @Created on : 10-oct-2016, 22:42:40
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/micssBasico.css">
    <title>Tabla 1 </title>
  </head>
  <body>
    <?php
    $contador = 0;
    echo "<table>";
    for ($v1 = 0; $v1 <= 10; $v1++) {
      echo "<tr>";
      echo "<th scope='col'>", $_REQUEST['numero'], ' x ', $contador, " = ", $_REQUEST['numero'] * $contador++, " </th>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
