<!--
    @Created on : 22-dic-2016, 16:06:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Macros : Tareas Repetitivas - Funciones - Ejecuta Tareas definidas

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <div>Funciones Definidas : viene con el lenguaje PHP</div>
    <?php

    /**
     * Simil : A la maquina expendedoras 
     * Introduce unos datos , devuelve un resultado
     * El flujo de ejecucion del programa nunca va ejecutar 
     * la funcion si no se hace una llamada a ella
     * 
     * @param type $num1
     * @param type $num2
     * @return type
     */
    function suma($num1, $num2) {

      $resultado = $num1 + $num2;

      return $resultado;
    }

//    Cuando llega el flujo de ejecucion del programa a 'suma' , busca la funcion
//    en todo el programa y ejecuta la funcion 'suma' , 
//    con los parametros que le estamos pasando
//    1º comprueba que la funcion existe y que esta preparada para recibir 2 parametros
    //    el 1º parametro viaja hasta el 1º parametro de la funcion function suma($num1) es el 5 
    //    el 2º parametro viaja hasta el 2º parametro y 
    //    se almacena en el 2º parametro de la definicion de la funcion  
    echo (suma(5, 7));
//    Parametro por defecto
    
    ?>
  </body>
</html>
