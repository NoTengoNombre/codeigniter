<!--
    @Created on : 19-dic-2016, 18:52:00
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

    function incrementaVariable() {
//      $contador = 0;
//    Si quieres que conserve el valor cuando salga de la funcion
//      crear una variable static
      static $contador2 = 0;

//    Variables locales : cuando salen de la funcion se destruye el valor
//      $contador++;
//    para que no se destruya se tiene que declarar una variable static
      $contador2++;

//      echo $contador . '<br>';
      echo $contador2 . '<br>';
    }

    function incrementaVariable2() {
      static $contador3 = 0;

      $contador3++;

      return $contador3;
    }

    incrementaVariable();
    incrementaVariable();

    incrementaVariable();
    incrementaVariable();

    var_dump(incrementaVariable());

    var_dump(incrementaVariable2());
    var_dump(incrementaVariable2());
    var_dump(incrementaVariable2());
    var_dump(incrementaVariable2());
    ?>
  </body>
</html>
