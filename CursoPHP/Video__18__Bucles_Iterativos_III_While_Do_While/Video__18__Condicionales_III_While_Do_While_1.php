<!--
    @Created on : 22-dic-2016, 14:17:29
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
// Do - While - 
//    Ejecuta la 1º linea dentro del 'do'
//    Aunque sea mentira la condicion 'while' que tenga anidada
    $var1 = 7;
    while ($var1 < 6) {
      echo "<br>Estamos ejecutando el codigo del bucle <br>";
      $var1++;
    }

    echo "<br>Hemos salido del bucle while";
    echo "<hr>";

    $var2 = 7;
    do {
      echo "<br>1º Estamos ejecutando el codigo del bucle<br>" . $var2;
      $var2++;
      echo "<br>2º Estamos ejecutando el codigo del bucle<br>" . $var2;
    } while ($var2 < 6); // llega a la condicion : se cumple con 'false' termina ejecucion

    echo "<br><b>Hemos salido del bucle do-while</b>";
    ?>
  </body>
</html>
