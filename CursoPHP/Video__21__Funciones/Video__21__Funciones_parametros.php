<!--
    @Created on : 22-dic-2016, 16:46:21
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

    /**
     *  Paso parametros por VALOR : POR DEFECTO en PHP
     * 
     * @param type $param
     */
    function ejemplo_parametro_valor($param) {
      $param++;
    }

    /**
     * Paso parametros por REFERENCIA
     * 
     * & - pasa el valor por REFERENCIA
     * @param type $param
     */
    function ejemplo_parametro_referencia(&$param) {
      $param++;
    }

    /**
     * 
     * @param type $valor1
     * @return type
     */
    function incrementa($valor1) {
//   2º Ejecuta la siguiente linea
      $valor1++;
      return $valor1; // devuelve el parametro
    }

//   3º Imprime por pantalla y devuelve '6'
    echo incrementa(5); //1º Coge el parametro y lo almacena en $valor1
    ?>
  </body>
  <?php
  echo '<hr>';

//  Variable que almacena un valor
  $numero = 5;
//  Si incremento el valor con la funcion - 
//  solo aumentara el valor dentro de la variable
  echo incrementa($numero) . "<br>";
  echo '<br>';
// Si nuestro el valor de la variable mostrara '5' 
//  No hay incremento , Para que haya incremento
//  necesita poner &
  echo 'Parametro por Valor : ' . $numero;
  ?>
  <?php
  echo '<hr>';

  /**
   * Metodo por REFERENCIA 
   * Aspersan crea una conexion , referencia
   * con el origen que es $valor1 , hay un vinculo
   * entre la variable de fuera y la variable 
   * que esta dentro de la funcion 
   * 
   * @param type $valor1
   */
  function incrementa_con_aspersan(&$valor1) {
// Cuando el flujo de ejecucion entra 
// dentro de la funcion , incrementa la variable
//    como había un vinculo incrementa la variable
//    que esta en el exterior 
    $valor1++;
    return $valor1;
  }

//  Variable que almacena un valor
  $valor1 = 5;
//  Si incremento el valor con la funcion - 
//  solo aumentara el valor dentro de la variable
  echo 'Metodo por referencia : ' . incrementa_con_aspersan($valor1) . "<br>";
// Si nuestro el valor de la variable mostrara '5' 
//  No hay incremento , Para que haya incremento
//  necesita poner &
  echo 'Parametro por Referencia : ' . $valor1;
  echo '<br><br><b>La variable $valor1 ha pasado de 5 a 6 '
  . '<br> porque hay una conexion/referencia'
  . '<br> con la variable que tiene '
  . '<br> dentro con la variable que hay fuera'
  . '<br> mediante el simbolo & </b>';

  echo "<br>Nos devuelve 2 <b>$valor1 </b>, 1º el return de la funcion";
  echo "<br>Nos devuelve 2 <b>$valor1 </b>, 2º la variable que esta fuera de la funcion";
  ?>
</html>
