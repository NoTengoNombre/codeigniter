<!--
    @Created on : 19-dic-2016, 19:03:09
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
    <style>
      .resaltar{
        color: #F00;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <?php
//    strcmp - Comparar valores de tipo string si son mayusculas y minusculas = si coincide True 1 , False 
//    Comparar valores de tipo string ignora si son mayusculas y minusculas

    $variable1 = "Casa";
    $variable2 = "CASA";
//    tiene en cuenta en mayuscula y minusculas
//    strcmp -> Es verdad que 'NO COINCIDEN'
    $resultado = strcmp($variable1, $variable2); // devuelve 1 si no son iguales , 0 si son iguales
    echo 'El resultado es : ' . $resultado;
    $resultado2 = strcasecmp($variable1, $variable2); // devuelve 1 si no son iguales , 0 si son iguales
    echo '<br>';

    echo '<hr>';

    if (!$resultado) {
      echo 'No coinciden';
    } else {
      echo 'Coinciden';
    }

    echo '<hr>';

    if ($resultado2) {
      echo 'No coinciden';
    } else {
      echo 'Coinciden';
    }

    echo '<hr>';

    $variable1 = "CASA";
    $variable2 = "CASA";

    $resultado1 = strcmp($variable1, $variable2); // devuelve 1 si no son iguales , 0 si son iguales

    echo 'El resultado es : ' . $resultado1;
    
    echo '<br>';
    
    if ($resultado1) {
      echo 'No coinciden';
    } else {
      echo 'Coinciden';
    }
    ?>
  </body>
</html>
