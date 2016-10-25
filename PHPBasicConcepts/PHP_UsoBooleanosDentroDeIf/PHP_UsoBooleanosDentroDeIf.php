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
if ((isset($_REQUEST['cod_persona']) && isset($_REQUEST['nombre'])) && (isset($_REQUEST['apellidos']) && isset($_REQUEST['pais']))) {
  echo "<hr>";
  echo "<br>1 valor " . $_REQUEST['cod_persona'];
  echo "<br>2 valor " . $_REQUEST['nombre'];
  echo "<br>3 valor " . $_REQUEST['apellidos'];
  echo "<br>4 valor " . $_REQUEST['pais'];
  if ((!empty($_REQUEST['cod_persona']) && !empty($_REQUEST['nombre'])) && (!empty($_REQUEST['apellidos']) && !empty($_REQUEST['pais']))) {
    echo "<hr>";
    echo "<h3>Datos Definidos</h3>";
    echo "<br>5 valor " . $_REQUEST['cod_persona'];
    echo "<br>6 valor " . $_REQUEST['nombre'];
    echo "<br>7 valor " . $_REQUEST['apellidos'];
    echo "<br>8 valor " . $_REQUEST['pais'];
    echo "<h3>Exito</h3>";
    echo "<hr>";
  } else {
    echo "<h3>Datos no definidos</h3>";
    echo "<br>9 valor null ? " . is_null($_REQUEST['cod_persona']);
    echo "<br>9 valor tipo " . var_dump($_REQUEST['cod_persona']);
    echo "<br>10 valor null ? " . is_null($_REQUEST['nombre']);
    echo "<br>10 valor tipo " . var_dump($_REQUEST['nombre']);
    echo "<br>11 valor null ? " . is_null($_REQUEST['apellidos']);
    echo "<br>11 valor tipo " . var_dump($_REQUEST['apellidos']);
    echo "<br>12 valor null ? " . is_null($_REQUEST['pais']);
    echo "<br>12 valor tipo " . var_dump($_REQUEST['pais']);
  }
}
?>


