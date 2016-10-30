<!DOCTYPE html>
<!--
    @Created on : 24-oct-2016, 23:07:05
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form name="form1" method="get" action ="<?php echo $_SERVER['PHP_SELF'] ?>">
      <label><h3>Formulario</h3></label>
      Cod_persona : <input type="text" name="cod_persona" value="">
      <input type="submit" name="enviar" value="Enviar">
    </form> 
  </body>
</html>
<br>
<hr>

<?php
//    $valor = $_GET['cod_persona']; No definida 1º vez en el formulario

if (isset($_REQUEST['cod_persona'])) {
  if (empty($_REQUEST['cod_persona'])) {
    $var0 = $_REQUEST['cod_persona'];
    echo " -> No definida " . $var0 . " <h3>Esta vacia</h3>";
  } else {
    $var = $_REQUEST['cod_persona'];
    echo "♦ Variable : " . $var;
  }
}
?>  













