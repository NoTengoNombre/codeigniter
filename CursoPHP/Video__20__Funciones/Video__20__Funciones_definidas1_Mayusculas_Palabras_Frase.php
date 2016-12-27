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

    /**
     * Esta funcion va a tener un parametro/argumento por defecto
     * $conversion = true
     *  
     * @param type $frase
     * @param type $conversion - Parametro por defecto 
     */
    function frase_mayus($frase, $conversion = true) {

      $frase = strtolower($frase);

//      Condicion que ejecuta la variable por defecto 
      if ($conversion == true) {
        $resultado = ucwords($frase);
      } else {
        $resultado = strtoupper($frase);
      }
      return $resultado;
    }

//  Solo le hemos pasado 1º argumento de los 2 argumentos que tiene
//    como no le hemos pasado el 2º parametro lo obtiene por defecto  
    echo (frase_mayus("esto esta en minuscula"));
    echo '<br>';
    echo (frase_mayus("esto esta en minuscula", false));
    ?>
  </body>
</html>





