<!--
    @Created on : 19-dic-2016, 20:51:42
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Esto seria la parte del cliente - envia al Servidor
                  strcmp = si son distintos devuelve true 1 , false 0
                  Tenga en cuenta que esta comparación 
                  considera mayúsculas y minúsculas.

-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="#">
      <p>
        <label for="num1"></label> 
        <!--id="Identificador unico" para CSS , JS , JQUERY-->
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <!--id="Identificador unico" para CSS , JS , JQUERY-->
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <!--id="Identificador unico" para CSS , JS , JQUERY-->
        <select name="operacion" id="operacion">
          <option>Suma</option>
          <option>Resta</option>
          <option>Multiplicacion</option>
          <option>Division</option>
          <option>Modulo</option>
        </select>
      </p>
      <p>
        <!--id="Identificador unico" para CSS , JS , JQUERY-->
        <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
      </p>
    </form>
    <p>&nbsp;</p>
    <?php
//    $_POST[""] --> Es un PUTO array asociativo 
    if (isset($_POST["button"])) { // si el usuario pulsa el boton de enviar del input 'submit' con id='button'
//      Introducir lo que ha introducido en el cuadro de texto 1 , 2 , 3 , 4
      $numero1 = $_POST["num1"];
      $numero2 = $_POST["num2"];
      $operacion = $_POST["operacion"];
//    Ahora otro condicional 'if' para saber que ha seleccionado
//    Si no son iguales
      if (!strcmp("Suma", $operacion)) {
        echo "El resultado es : " . ($numero1 + $numero2);
      }
      if (!strcmp("Multiplicacion", $operacion)) {
        echo "El resultado es : " . ($numero1 * $numero2);
      }
      if (!strcmp("Resta", $operacion)) {
        echo "El resultado es : " . ($numero1 - $numero2);
      }
      if (!strcmp("Division", $operacion)) {
        echo "El resultado es : " . ($numero1 / $numero2);
      }
      if (!strcmp("Modulo", $operacion)) {
        echo "El resultado es : " . ($numero1 % $numero2);
      }
    }
    ?>
  </body>
</html>
