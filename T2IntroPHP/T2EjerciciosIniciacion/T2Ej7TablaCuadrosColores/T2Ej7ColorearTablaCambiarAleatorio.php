 

<!DOCTYPE html>
<html>
  <head>
    <!--Crea el estilo--> 
    <style>
      /*Dentro del estilo hay una capa y le asigno anchura
       altura , tama�o del borde y tipo*/ 
      div{
        position:absolute;
        height:30px;
        width:30px;
        border:1px solid black;
      }
    </style>
    <title>ejercicio 7 Colorear Tablas</title>
  </head>
  <!--Dentro del body del html craemos los cuadrados -->
  <body>
    <?php

//    metodo mostrar colores 
    function creaCuadrado($top, $left, $color) {
      echo('<div style="top:' . $top . 'px;left:' . $left . 'px; background-color: ' . $color . '; "></div>');
    }

    $arrayColores = array('#99ff99', '#CE2B37', '#ffff66;', '#428bca;', '#009246;');

    for ($n1 = 1; $n1 <= 12200; $n1++) {
      $random = rand(0, 4);
      $c = $arrayColores[$random];
      $a = rand(1, 1000);
      $b = rand(1, 1500);
      creaCuadrado($a, $b, $c);
    }
    ?>  
  </body>
</html>