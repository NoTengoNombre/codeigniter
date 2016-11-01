 

<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio 7 Colorear Tablas</title>
  </head>
  <body>
      <?php
      $numero = 5;
      $n = 1;
      for ($n1 = 1; $n1 <= 5; $n1++) {
        echo "<div style='width: 50px; height:50px; background: #5fa1ce;></div>";
       for ($n2 = 1; $n2 <= 5; $n2++) {
       echo "<div style='width: 50px; height:50px; background: #cec85f;></div>";
       }
      }
      ?>
  </body>
</html>