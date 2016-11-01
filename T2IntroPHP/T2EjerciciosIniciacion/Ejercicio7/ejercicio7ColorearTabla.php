 

<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio 7 Colorear Tablas</title>
  </head>
  <body>
      <?php
      $aleatorio = rand(1, 10);
      echo "<table border=1>";
      $n = 1;
      for ($n1 = 1; $n1 <= 5; $n1++) {
       if ($n1 % 2 == 0)
        echo "<tr bgcolor=#bdc3d6>";
       else
        echo "<tr>";
       for ($n2 = 1; $n2 <= 5; $n2++) {
        echo "<td>", $n, "</td>";
        $n = $n + 1;
       }
       echo "</tr>";
      }
      echo "</table>";
      ?>
  </body>
</html>