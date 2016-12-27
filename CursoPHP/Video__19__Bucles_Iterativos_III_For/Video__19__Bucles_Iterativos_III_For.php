<!--
    @Created on : 22-dic-2016, 14:56:30
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
    echo '<h1>break : Rompe el flujo de ejecucion del programa</h1>';   
    echo '<h1>continue : Hace que no se ejecute o haya una interaccion dentro del bucle</h1>';
    echo '<br>No ejecutar una iteraccion o vuelta de bucle';
//    flujo de ejecucion de arriba a abajo
//    declaracion;condicion;incremento
//                          el incremento se ejecutara cuando haya terminado de ejecutar todo el codigo interior del bucle
    for ($i = 0; $i <= 10; $i++) {
      echo 'Hemos entrado en el bucle: ' . $i;
      echo '<br>Instruccion 1';
      echo '<br>Instruccion 2';
      echo '<br>Incrementa valor de la variable <b>$i</b>';
      echo "<br>";
    }
    echo '<br>';
    echo '<h1>Resto de Instruccion</h1>';


    for ($ii = 10; $ii >= 0; $ii--) {
      echo "Hemos entrado en el bucle $ii";
      echo '<br>';
    }

    echo "<hr>";

    for ($iii = 0; $iii <= 20; $iii += 2) {
      echo "Hemos entrado en el bucle $iii";
      echo '<br>';
    }

    echo "<hr>";

    for ($c = 0; $c <= 20; $c += 2) {
      echo "Hemos entrado en el bucle $c";
      echo '<br>';
      if ($c == 6) {
        echo "Hemos entrado en el if $c";
        echo '<br>';
        echo "Termina la ejecucion con break";
        echo '<br>';
        break;
      }
    }
    echo "<hr>";
    for ($n = 0; $n < 11; $n++) {
      echo "9 x $n = " . 9 * $n . "<br>";
    }
    echo "Salimos del bucle";

    echo "<hr>";
    for ($i = 10; $i >= -10; $i--) {
      if ($i == 0) {
        echo "No se puede dividir entre $i";
        break;
      } else {
        echo "9 / $i = " . ( 9 / $i ) . "<br>";
      }
    }
    echo "<h1>Salimos del 1º bucle</h1>";

    echo "<hr>";
    for ($i = 10; $i >= -10; $i--) {
      if ($i == 0) {
        echo "No se puede dividir entre $i";
        echo "<b><br>Cuando llegue al 'continue' la instruccion de abajo NO SE EJECUTA y continuara cuando i es igual a -1 </b><br> ";
        continue; // cuando llegue al 'continue' la instruccion de abajo - no se ejecuta 
      }
      echo "9 / $i = " . ( 9 / $i ) . "<br>";
    }
    echo "<h1>Salimos del 2º bucle</h1>";
    ?>
  </body>
</html>
