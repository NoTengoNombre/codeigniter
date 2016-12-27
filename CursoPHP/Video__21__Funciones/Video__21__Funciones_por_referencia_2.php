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
    ?>
  </body>
  <?php
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
  function cambia_mayus($param) {
// Cuando el flujo de ejecucion entra 
// dentro de la funcion , la variable
//    como había un vinculo la variable
//    que esta en el exterior 
    $param = strtolower($param); // 1º instruccion pone todo en minuscula

    $param = ucwords($param); //2º instruccion pone la 1º letra en mayuscula

    return $param;
  }

  $cadena = "<b>hOlA mUnDo</b>";


  echo cambia_mayus($cadena) . "<br>";

  echo $cadena;

  echo '<hr> Parametros por Referencia : USO del &$param<br>';

  function cambia_mayus_con_referencia(&$param1) {
// Cuando el flujo de ejecucion entra 
// dentro de la funcion , la variable
//    como había un vinculo la variable
//    que esta en el exterior 
    $param1 = strtolower($param1); // 1º instruccion pone todo en minuscula

    $param1 = ucwords($param1); //2º instruccion pone la 1º letra en mayuscula

    return $param1;
  }

  $cadena1 = "<b>hOlA mUnDo</b>";


  echo cambia_mayus($cadena1) . "<br>";

  echo $cadena1;
  ?>
</html>
