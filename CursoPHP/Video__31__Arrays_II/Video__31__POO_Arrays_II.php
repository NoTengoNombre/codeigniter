<!--
    @Created on : 23-dic-2016, 10:39:42
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
    $datos = array("Nombre" => "Juan", "Apellidos" => "Gomez", "Edad" => 21);
//    $datos = "Martin";
//    echo $datos;
    $c = 0;
//  Bucle para Arrays ASOCIATIVOS
//                     Posicion  Contenido
    foreach ($datos as $clave => $valor) {
      echo "A $clave le corresponde $valor <br>";
    }

    echo '<hr>';

    if (is_array($datos)) {
      echo "Array";
      echo '<br>';
      foreach ($datos as $indice) {
        echo $c++ . " - " . $indice;
        echo '<br>';
        if ($indice == "Juan") {
          echo "<b>El esta aqui</b>";
          echo "<br>";
        }
      }
    } else {
      echo "No array";
    }
    ?>
  </body>
</html>
