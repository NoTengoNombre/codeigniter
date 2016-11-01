 

<!DOCTYPE html>
<html>
  <head>
    <!--Crea el estilo--> 
    <style>
      div{
        height: 50px;
        width : 50px;
        position: absolute;
      }
    </style>
    <title>ejercicio 7 Colorear Tablas</title>
  </head>
  <!--Dentro del body del html craemos los cuadrados -->
  <body>
    <?php
    $hex = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
    for ($i = 0; $i < 2000; $i++) {
      $color = "";
      for ($j = 0; $j < 6; $j++) {
        $color = $color . $hex[rand(0, 15)];
      }
      echo "<div style='top:" . rand(0, 600) . "px;"
      . "left:" . rand(0, 1316) . "px;"
      . "background-color:#" . $color . ";'>"
      . "</div>";
    }
    ?>  
  </body>
</html>