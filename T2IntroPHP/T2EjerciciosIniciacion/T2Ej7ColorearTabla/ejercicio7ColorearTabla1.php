 

<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio 7 Colorear Tablas</title>
    <link rel=stylesheet href="micss.css" type="text/css">
  </head>
  <body>
      <?php
      echo "<table class='prueba'>";
      $n = 1;
      for ($n1 = 1; $n1 <= 10; $n1++) {
       if ($n1 % 2 == 0) {
        echo "<tr class='n1'>";
        echo "<div class='polig'></div>";
       } else
        echo "<tr class='n'>";

       for ($n2 = 1; $n2 <= 10; $n2++) {
        echo "<td class='n1'>";
       }
       echo "</tr>";
      }
      echo "</table>";
      ?>
  </body>
</html>