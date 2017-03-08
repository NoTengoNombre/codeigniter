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

    $var2 = 7;
    do {
      echo "1º Estamos ejecutando el codigo del bucle :<br>" . $var2 . "<br>";
    } while ($var2++ < 6); //el autoincremento dentro de la condicion

    echo "Hemos salido del bucle do-while";
    ?>
  </body>
</html>
