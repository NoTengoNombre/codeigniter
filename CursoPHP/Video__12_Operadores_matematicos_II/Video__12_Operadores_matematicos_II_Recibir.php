<!--
    @Created on : 19-dic-2016, 21:22:12
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Paso de parametros : 
                  A la hora declara la funcion adicionalmente 
                  puede decirl dentro de los parentesis , esta funcion tien que recibir un valor
                  declaradon una variable dentro de los parentesis
-->

<style>
  .resultado {
    color : #F00;
    font-weight: bold;
    font-size: 32px;
  }
</style>
<?php
if (isset($_POST['button'])) {
  $numero1 = $_POST["num1"];
  $numero2 = $_POST["num2"];
  $operacion = $_POST["operacion"]; // viene del desplegable del formulario
//llamar a la funcion de ambito LOCAL
  calcular($operacion);
}

/**
 * Paso de parametros : 
  A la hora declara la funcion adicionalmente
  puede decirl dentro de los parentesis ,
  esta funcion tien que recibir un valor
  declaradon una variable dentro de los parentesis
 * 
 * @param type $calculo
 */
function calcular($calculo) {
//  1º - $calculo : es accesible porque es un parametro de la funcion
//  2º - El ambito de las variable solo esta dentro del if anterior
//  por eso da Error
  if (!strcasecmp("Suma", $calculo)) {
//  3º - Esto hace que la variable sea global y se corresponda con las variables de entrada desde el 
//       $_POST
    global $numero1;
    global $numero2;
    echo "<p class='resultado'>El resultado es : " . ($numero1 + $numero2) . '</p>';
  }

  if (!strcasecmp("Resta", $calculo)) {
    global $numero1;
    global $numero2;
    echo "<p class='resultado'>El resultado es : " . ($numero1 - $numero2) . '</p>';
  }

  if (!strcasecmp("Multiplicacion", $calculo)) {
    global $numero1;
    global $numero2;
    echo "<p class='resultado'>El resultado es : " . ($numero1 * $numero2) . '</p>';
  }

  if (!strcasecmp("Division", $calculo)) {
    global $numero1;
    global $numero2;
    echo "<p class='resultado'>El resultado es : " . ($numero1 / $numero2) . '</p>';
  }

  if (!strcasecmp("Modulo", $calculo)) {
    global $numero1;
    global $numero2;
    echo "<p class='resultado'>El resultado es : " . ($numero1 % $numero2) . '</p>';
  }
}
?>
