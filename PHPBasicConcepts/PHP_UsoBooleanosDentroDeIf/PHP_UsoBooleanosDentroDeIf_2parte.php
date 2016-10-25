<!--
    @Created on : 25-oct-2016, 16:39:54
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
      <br>
      Nombre :  <input type="text" name="nombre" value="">
      <br>
      Apellidos :  <input type="text" name="apellidos" value="">
      <br>
      Pais :  <input type="text" name="pais" value="">
      <br>
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form> 
  </body>
</html>
<br>
<hr>

<?php
if (isset($_REQUEST['cod_persona'], $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['pais'])) {
  echo "<hr>";
  echo "<br>1 definida " . $_REQUEST['cod_persona'];
  echo "<br>2 definida " . $_REQUEST['nombre'];
  echo "<br>3 definida " . $_REQUEST['apellidos'];
  echo "<br>4 definida " . $_REQUEST['pais'];
  if (empty($_REQUEST['cod_persona']) && empty($_REQUEST['nombre']) && empty($_REQUEST['apellidos']) || empty($_REQUEST['pais'])) {
    echo "<h3>Datos no definidos</h3>";
  } else {
    echo "<h3>Datos Definidos</h3>";
    echo "<hr>";
    echo "<br>5 vacia " . $_REQUEST['cod_persona'];
    echo "<br>6 vacia " . $_REQUEST['nombre'];
    echo "<br>7 vacia " . $_REQUEST['apellidos'];
    echo "<br>8 vacia " . $_REQUEST['pais'];
    echo "<h1>Exito</h1>";
    echo "<hr>";
  }
} else {
  echo "No estan todos definidos";
}
?>


