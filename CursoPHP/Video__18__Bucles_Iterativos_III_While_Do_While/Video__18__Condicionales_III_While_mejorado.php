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
//    El FLUJO DE EJECUCION siempre va de arriba a abajo
//   PARA ACCEDER A LA BD - USAR EL WHILE - PARA SACAR LOS REGISTROS O LINEAS - FILAS - TUPLAS
//    PARA RECORRER CADA LINEA A LINEA , REGISTROS , BASE DE DATOS
    $var1 = 1;
    while ($var1 < 6) {//Todo el codigo se repite mientras la condicion sea cierta
      echo "<br> Estamos ejecutando el codigo del bucle ";
      echo $var1++;
    }
    echo "<h1>Hemos salido del bucle : $var1 </h1>";

    $var2 = 1;
//    BUCLE INFINITO
    while ($var2 < 6):
      echo "<br> Estamos ejecutando el codigo del bucle infinito";
      break;
    endwhile;
    ?>
  </body>
</html>
