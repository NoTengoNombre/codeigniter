<!--
    @Created on : 26-oct-2016, 19:30:54
    @Author     : RVS - N.F.N.D
    @Pag        : http://www.mclibre.org/consultar/php/lecciones/php_recogida_datos.html
    @version    :
    @TODO       :
-->

<html>
  <head>
    <meta charset="UTF-8">
    <title>Prueba para fijar datos por medio de formularios</title>
  </head>
  <body>
    <p align="center"> Formulario </p>
    <h4>Formulario para consultar datos </h4>
    <hr> 
    <form method="post" name="formGeneral" action=" <?php echo $_SERVER["PHP_SELF"] ?>">
      Cod Pelicula  : <input type="text" name="cod_pelicula" value="">
      <br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
<hr>
<?php

class Pelicula {

  function consultar() {
    $mysqli = new mysqli("localhost", "root", "", "videoclubprueba");
    if ($mysqli->connect_errno) {
      die("<b><br>Error en la conexion : </b>" . $mysqli->connect_error);
    }

    $tmp = (isset($_REQUEST["cod_pelicula"])) ? trim(htmlspecialchars($_REQUEST["cod_pelicula"], ENT_QUOTES, "UTF-8")) : "";
    if ($tmp == "") {
      print "<p>No ha escrito ningun nombre </p>";
    } else {
      print "<p> Su nombre es " . $tmp . "</p>";
    }
  }

}

$pe = new Pelicula();
$pe->consultar();

