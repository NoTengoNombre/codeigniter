<!--
    @Created on : 23-dic-2016, 10:14:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Variable : espacio de la memoria del ordenador  
                  donde se almacena un valor 
                  que cambiara en la ejecucion del programa
                  Array : una serie de variables indexadas que almacenan valores 
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//    Declaracion - Array Indexado
//    $semana[];
//      No necesita indice
//posicion 0
    $semana[] = "Lunes";
//posicion 1
    $semana[] = "Martes";
//posicion 2..3..4...5
    $semana[] = "Miercoles";
    $semana[] = "Jueves";
    $semana[] = "Viernes";
    $semana[] = "Sabado";
    $semana[] = "Domingo ";

    for ($i = 0; $i < count($semana); $i++) {
      echo $semana[$i] . '<br>';
    }

    echo '<hr>';

    $semana[] = "Fin de Semana";

    for ($i = 0; $i < count($semana); $i++) {
      echo $semana[$i] . '<br>';
    }
    ?>
  </body>
</html>
