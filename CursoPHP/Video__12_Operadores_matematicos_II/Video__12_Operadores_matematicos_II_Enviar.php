<!--
    @Created on : 19-dic-2016, 21:22:12
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
    <p>&nbsp;</p>
    <form name="form1" method="post" action="Video__12_Operadores_matematicos_II_Recibir.php">
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
  </body>
</html>









