 

<!DOCTYPE html>
<html>
  <head>
    <title>ejercicio 7 Colorear Tablas</title>
    <style>
      div {
          position:absolute;
          height: 80px;
          width: 80px;
          /*border: 1px solid #EEEEEE;*/
      }
    </style>
    <title>Ejercicio 7 Colorear pantalla</title>
  </head>
  <body>
      <?php

      function colores($top, $left, $color) {
       echo ('<div style="top:' . $top . 'px;left:' . $left . 'px; background-color:' . $color . '; "></div>');
      }

      $arrayColores = array('#99ff99', '#CE2B37', '#3333ff', '#cc66ff', '#009246;', '#ffff66');

      for ($v = 0; $v < 10000; $v++) {
       $random = rand(0, 5);
       $c = $arrayColores[$random];
       $arrays_asociativos = rand(1, 1000);
       $b = rand(1, 1500);
       colores($arrays_asociativos, $b, $c);
      }
      ?>
  </body>
</html>