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
  echo "♦ cod_persona: " . var_dump($_REQUEST['cod_persona']);
  echo "<br>";
  echo isset($_REQUEST['cod_persona']);
  echo "<br>";
  echo "♦ nombre: " . var_dump($_REQUEST['nombre']);
  echo "<br>";
  echo isset($_REQUEST['nombre']);
  echo "<br>";
  echo "♦ apellidos: " . var_dump($_REQUEST['apellidos']);
  echo "<br>";
  echo isset($_REQUEST['apellidos']);
  echo "<br>";
  echo "♦ pais: " . var_dump($_REQUEST['pais']);
  echo "<br>";
  echo isset($_REQUEST['pais']);
  echo "<br>";
  echo "<hr>";
}
if ((empty($_REQUEST['cod_persona']) && empty($_REQUEST['nombre'])) && (empty($_REQUEST['apellidos']) && empty($_REQUEST['pais']))) {
  echo "No Introducir datos en el campo devuelve <strong>Verdadero</strong>";
  echo "<br>";
  echo "• cod_persona: " . var_dump((empty($_REQUEST['cod_persona'])));
  echo "<br>";
  echo "• nombre: " . var_dump((empty($_REQUEST['nombre'])));
  echo "<br>";
  echo "• apellidos : " . var_dump((empty($_REQUEST['apellidos'])));
  echo "<br>";
  echo "• pais: " . var_dump((empty($_REQUEST['pais'])));
  echo "<br>";
} else {
  echo "Introducir datos en el campo devuelve <strong>falso</strong>";
  echo "<br>";
  echo "♠ cod_persona: " . var_dump((empty($_REQUEST['cod_persona'])));
  echo "♠ cod_persona es nula : " . is_null($_REQUEST['cod_persona']);
  echo "<br>";
  echo "♠ cod_persona: " . var_dump((empty($_REQUEST['nombre'])));
  echo "♠ nombre es nula : " . is_null($_REQUEST['nombre']);
  echo "<br>";
  echo "♠ cod_persona: " . var_dump((empty($_REQUEST['apellidos'])));
  echo "♠ apellidos es nula : " . is_null($_REQUEST['apellidos']);
  echo "<br>";
  echo "♠ cod_persona: " . var_dump((empty($_REQUEST['pais'])));
  echo "♠ pais es nula : " . is_null($_REQUEST['pais']);
  echo "<br>";
}


  