<!--
    @Created on : 19-dic-2016, 21:52:54
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
      .resultado{
        color: #F00;
        font-weight: bold;
        font-size: 32px;
      }
    </style>
  </head>
  <body>
    <?php
//    $_POST[] - Array asociativo 
    if (isset($_POST['button'])) {

      $numero1 = $_POST["num1"];
      $numero2 = $_POST["num2"];
      $operacion = $_POST["operacion"];
//      llamada al metodo
      calcular($operacion);
    }

    /**
     * 
     * @global type $numero1
     * @global type $numero2
     * 
     * @param type $calculo
     */
    function calcular($calculo) {

      if (!strcmp("Sumar", $calculo)) {
//  3º - Esto hace que la variable sea global y se corresponda con las variables de entrada desde el 
//       $_POST
        global $numero1;
        global $numero2;

        $resultado = $numero1 + $numero2;

        echo "<p class='resultado'>El resultado es : $resultado </p>";
      }


      if (!strcmp("Restar", $calculo)) {
//      Variables globales para que el 1º if pueda almacenarlas
//      Para almacenar las variables dentro del if que recoge las variables del formulario
        global $numero1;
        global $numero2;

        $resultado = $numero1 - $numero2;

        echo "<p class='resultado'>El resultado es : $resultado </p>";
      }

      if (!strcmp("Multiplicar", $calculo)) {
        global $numero1;
        global $numero2;

        $resultado = $numero1 * $numero2;

        echo "<p class='resultado'>El resultado es : $resultado </p>";
      }

      if (!strcmp("Dividir", $calculo)) {
//        
        global $numero1;
        global $numero2;

        $resultado = $numero1 / $numero2;

        echo "<p class='resultado'>El resultado es : $resultado </p>";
      }


      if (!strcmp("Modulo", $calculo)) {

        global $numero1;
        global $numero2;

        $resultado = $numero1 % $numero2;

        echo "<p class='resultado'>El resultado es : $resultado  </p>";
      }

      if (!strcmp("Incremento", $calculo)) {
        global $numero1;

        $numero1++;

        $resultado = $numero1;

        echo "<p class='resultado'>El resultado es : $resultado </p>";
      }

      if (!strcmp("Decremento", $calculo)) {
        global $numero1;

        $numero1--;

        $resultado = $numero1;

        echo "<p class='resultado'>El resultado es : $resultado  </p>";
      }
    }
    ?>
  </body>
</html>
