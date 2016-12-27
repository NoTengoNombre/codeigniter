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
  </head>
  <body>
    <form name="form1" method="post" action="#">
      <p>
        <label form="num1"></label>
        <input type="text" name="num1" id="num1">

        <label form="num2"></label>
        <input type="text" name="num2" id="num2">

        <label for="operacion"></label>
        <select name="operacion" id="operacion">
          <option>Sumar</option>
          <option>Restar</option>
          <option>Multiplicar</option>
          <option>Dividir</option>
          <option>Modulo</option>
          <option>Incremento</option>
          <option>Decremento</option>
        </select>
      </p>

      <p> 
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
      </p>
    </form> 

    <p>&nbsp</p>

    <?php
//    incluye todo el codigo del script al que hace referencia
    include ("Video__13__Operadores_matematicos_III_Recibir.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    if (isset($_POST["button"])) {

      $numero1 = $_POST["num1"];
      $numero2 = $_POST["num2"];
      $operacion = $_POST["operacion"];

      calcular($operacion);
    }
    ?>
  </form>
</body>
</html>
